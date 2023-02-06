<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\detectionOptions\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The name of the check item.
     *
     * @example Nvme
     *
     * @var string
     */
    public $name;

    /**
     * @description The risk that the check item may have.
     *
     * @example NVMe.NotInstallded
     *
     * @var string
     */
    public $riskCode;

    /**
     * @description Indicates the severity of the risk that the check item of the imported custom image has. If the check item is at risk, this parameter is returned. If the check item is not at risk, this parameter is not returned.
     *
     * - Medium: The check item has a medium risk, which may affect the startup performance or configurations of the instance. We recommend that you handle the risk.
     * @example High
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The result of the check item.
     *
     * @example Supported
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'      => 'Name',
        'riskCode'  => 'RiskCode',
        'riskLevel' => 'RiskLevel',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskCode) {
            $res['RiskCode'] = $this->riskCode;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskCode'])) {
            $model->riskCode = $map['RiskCode'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
