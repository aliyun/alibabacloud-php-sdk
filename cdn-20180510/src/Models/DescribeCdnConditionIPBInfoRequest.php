<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnConditionIPBInfoRequest extends Model
{
    /**
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
