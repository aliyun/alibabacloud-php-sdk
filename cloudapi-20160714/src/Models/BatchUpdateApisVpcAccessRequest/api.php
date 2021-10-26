<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\BatchUpdateApisVpcAccessRequest;

use AlibabaCloud\Tea\Model;

class api extends Model
{
    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $apiUid;
    protected $_name = [
        'stageId' => 'StageId',
        'groupId' => 'GroupId',
        'apiUid'  => 'ApiUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
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
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }

        return $model;
    }
}
