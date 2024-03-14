<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeCfwRiskLevelSummaryRequest extends Model
{
    /**
     * @description The instance type.
     *
     * @example EcsEIP
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The language of the content within the response.
     *
     * Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The region ID of your Cloud Firewall.
     *
     * >  For more information about Cloud Firewall supported regions, see [Supported regions](~~195657~~).
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'lang'         => 'Lang',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCfwRiskLevelSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
