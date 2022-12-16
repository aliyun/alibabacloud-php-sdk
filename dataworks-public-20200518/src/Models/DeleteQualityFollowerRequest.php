<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteQualityFollowerRequest extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $followerId;

    /**
     * @example autotest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'followerId'  => 'FollowerId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->followerId) {
            $res['FollowerId'] = $this->followerId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQualityFollowerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FollowerId'])) {
            $model->followerId = $map['FollowerId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
