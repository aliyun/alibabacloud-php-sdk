<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnConditionIPBInfoRequest extends Model
{
    /**
     * @description The configuration ID. Valid values:
     *
     *   condition_region_config_cn
     *   condition_region_config_en
     *   condition_isp_config_cn
     *   condition_isp_config_en
     *   condition_country_config_cn
     *   condition_country_config_en
     *
     * This parameter is required.
     * @example condition_region_config_cn
     *
     * @var string
     */
    public $dataId;
    protected $_name = [
        'dataId' => 'DataId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnConditionIPBInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        return $model;
    }
}
