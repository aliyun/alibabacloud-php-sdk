<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ListUsersRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $userName;
    /**
     * @var string[]
     */
    public $userNames;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'userName'   => 'UserName',
        'userNames'  => 'UserNames',
    ];

    public function validate()
    {
        if (\is_array($this->userNames)) {
            Model::validateArray($this->userNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userNames) {
            if (\is_array($this->userNames)) {
                $res['UserNames'] = [];
                $n1               = 0;
                foreach ($this->userNames as $item1) {
                    $res['UserNames'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserNames'])) {
            if (!empty($map['UserNames'])) {
                $model->userNames = [];
                $n1               = 0;
                foreach ($map['UserNames'] as $item1) {
                    $model->userNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
