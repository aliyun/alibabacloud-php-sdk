<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLiveMessageGroupBandResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $bannedUserList;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $isbannedAll;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $unbannedUserList;
    protected $_name = [
        'bannedUserList' => 'BannedUserList',
        'groupId' => 'GroupId',
        'isbannedAll' => 'IsbannedAll',
        'requestId' => 'RequestId',
        'unbannedUserList' => 'UnbannedUserList',
    ];

    public function validate()
    {
        if (\is_array($this->bannedUserList)) {
            Model::validateArray($this->bannedUserList);
        }
        if (\is_array($this->unbannedUserList)) {
            Model::validateArray($this->unbannedUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bannedUserList) {
            if (\is_array($this->bannedUserList)) {
                $res['BannedUserList'] = [];
                $n1 = 0;
                foreach ($this->bannedUserList as $item1) {
                    $res['BannedUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->isbannedAll) {
            $res['IsbannedAll'] = $this->isbannedAll;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->unbannedUserList) {
            if (\is_array($this->unbannedUserList)) {
                $res['UnbannedUserList'] = [];
                $n1 = 0;
                foreach ($this->unbannedUserList as $item1) {
                    $res['UnbannedUserList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['BannedUserList'])) {
            if (!empty($map['BannedUserList'])) {
                $model->bannedUserList = [];
                $n1 = 0;
                foreach ($map['BannedUserList'] as $item1) {
                    $model->bannedUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['IsbannedAll'])) {
            $model->isbannedAll = $map['IsbannedAll'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UnbannedUserList'])) {
            if (!empty($map['UnbannedUserList'])) {
                $model->unbannedUserList = [];
                $n1 = 0;
                foreach ($map['UnbannedUserList'] as $item1) {
                    $model->unbannedUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
