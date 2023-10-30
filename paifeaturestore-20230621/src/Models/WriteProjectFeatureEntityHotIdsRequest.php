<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class WriteProjectFeatureEntityHotIdsRequest extends Model
{
    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $hotIds;

    /**
     * @example 20221213
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'hotIds'  => 'HotIds',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotIds) {
            $res['HotIds'] = $this->hotIds;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WriteProjectFeatureEntityHotIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotIds'])) {
            $model->hotIds = $map['HotIds'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
