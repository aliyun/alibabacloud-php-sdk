<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchAbolishApisRequest;

use AlibabaCloud\Tea\Model;

class api extends Model
{
    /**
     * @var string
     */
    public $apiUid;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $stageId;

    /**
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
