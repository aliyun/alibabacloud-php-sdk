<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisRequest;

use AlibabaCloud\Tea\Model;

class api extends Model
{
    /**
     * @description The name of the environment.
     *
     * @example 994f72dcdaf04af0b38022c65fdbd1ac
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description The ID of the API.
     *
     * @example ced5ab777f7b440398ea70e4470124de
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the API group.
     *
     * @example 979fd16250644d5b82173534f465ac77
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The ID of the operation.
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiUid'    => 'ApiUid',
        'groupId'   => 'GroupId',
        'stageId'   => 'StageId',
        'stageName' => 'StageName',
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
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
