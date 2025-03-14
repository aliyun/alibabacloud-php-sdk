<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAssetInfoPublishRequest extends Model
{
    /**
     * @description An extended parameter. This parameter is temporarily unavailable.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The UUIDs of the servers that you want to query.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'name' => 'Name',
        'uuidList' => 'UuidList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssetInfoPublishRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
