<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDesktopOversoldUserRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $endUserId;

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
    public $oversoldGroupId;

    /**
     * @var string[]
     */
    public $userDesktopIds;

    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'endUserId' => 'EndUserId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'oversoldGroupId' => 'OversoldGroupId',
        'userDesktopIds' => 'UserDesktopIds',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->userDesktopIds)) {
            Model::validateArray($this->userDesktopIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
        }

        if (null !== $this->userDesktopIds) {
            if (\is_array($this->userDesktopIds)) {
                $res['UserDesktopIds'] = [];
                $n1 = 0;
                foreach ($this->userDesktopIds as $item1) {
                    $res['UserDesktopIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }

        if (isset($map['UserDesktopIds'])) {
            if (!empty($map['UserDesktopIds'])) {
                $model->userDesktopIds = [];
                $n1 = 0;
                foreach ($map['UserDesktopIds'] as $item1) {
                    $model->userDesktopIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
