<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchDeployApisRequest;

use AlibabaCloud\Tea\Model;

class api extends Model
{
    /**
     * @description The API ID.
     *
     * @example 2b35dd68345b472f8051647306a16415
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description The API group ID.
     *
     * @example b4f5c342b8bc4ef88ccda0332402e0fa
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'apiUid'  => 'ApiUid',
        'groupId' => 'GroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return api
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
