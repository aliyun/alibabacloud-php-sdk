<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeFotaTasksRequest extends Model
{
    /**
     * @var string
     */
    public $fotaStatus;

    /**
     * @var string
     */
    public $lang;

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
     * @var string[]
     */
    public $taskUid;

    /**
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'fotaStatus' => 'FotaStatus',
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'taskUid' => 'TaskUid',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        if (\is_array($this->taskUid)) {
            Model::validateArray($this->taskUid);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fotaStatus) {
            $res['FotaStatus'] = $this->fotaStatus;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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

        if (null !== $this->taskUid) {
            if (\is_array($this->taskUid)) {
                $res['TaskUid'] = [];
                $n1 = 0;
                foreach ($this->taskUid as $item1) {
                    $res['TaskUid'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
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
        if (isset($map['FotaStatus'])) {
            $model->fotaStatus = $map['FotaStatus'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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

        if (isset($map['TaskUid'])) {
            if (!empty($map['TaskUid'])) {
                $model->taskUid = [];
                $n1 = 0;
                foreach ($map['TaskUid'] as $item1) {
                    $model->taskUid[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
