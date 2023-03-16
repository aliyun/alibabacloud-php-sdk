<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponseBody\data\apiAuthorizationList;

use AlibabaCloud\Tea\Model;

class authorizationRecords extends Model
{
    /**
     * @description The time when the access permissions on the API were granted to other users.
     *
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who granted other users the access permissions on the API.
     *
     * @example 12345
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The end time of the validity period of the authorization.
     *
     * @example 2020-06-24T00:21:01+0800
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the workspace to which the access permissions on the API are granted.
     *
     * @example 10004
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'creatorId'   => 'CreatorId',
        'endTime'     => 'EndTime',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizationRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
