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
     * @description The risk that is detected on the check item.
     *
     * @example NVMe.NotInstallded
     *
     * @var string
     */
    public $riskCode;

    /**
     * @description Indicates the severity of the risk that is detected on the check item of the imported custom image. If the system detects a risk on the check item, this parameter is returned. If the system does not detect a risk on the check item, this parameter is not returned.
     *
     * Valid values:
     *
     *   High: The check item is a high-risk item that may affect the startup of the instance. We strongly recommended that you fix this item at your earliest convenience.
     *   Medium: The check item is a medium-risk item that may affect the startup performance or configurations of the instance. We recommend that you fix this item.
     *
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
