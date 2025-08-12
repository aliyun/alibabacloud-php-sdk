<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class DescribeChannelUsersResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $interactiveUserList;

    /**
     * @var int
     */
    public $interactiveUserNumber;

    /**
     * @var bool
     */
    public $isChannelExists;

    /**
     * @var string[]
     */
    public $liveUserList;

    /**
     * @var int
     */
    public $liveUserNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'interactiveUserList' => 'InteractiveUserList',
        'interactiveUserNumber' => 'InteractiveUserNumber',
        'isChannelExists' => 'IsChannelExists',
        'liveUserList' => 'LiveUserList',
        'liveUserNumber' => 'LiveUserNumber',
        'requestId' => 'RequestId',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->interactiveUserList)) {
            Model::validateArray($this->interactiveUserList);
        }
        if (\is_array($this->liveUserList)) {
            Model::validateArray($this->liveUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interactiveUserList) {
            if (\is_array($this->interactiveUserList)) {
                $res['InteractiveUserList'] = [];
                $n1 = 0;
                foreach ($this->interactiveUserList as $item1) {
                    $res['InteractiveUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->interactiveUserNumber) {
            $res['InteractiveUserNumber'] = $this->interactiveUserNumber;
        }

        if (null !== $this->isChannelExists) {
            $res['IsChannelExists'] = $this->isChannelExists;
        }

        if (null !== $this->liveUserList) {
            if (\is_array($this->liveUserList)) {
                $res['LiveUserList'] = [];
                $n1 = 0;
                foreach ($this->liveUserList as $item1) {
                    $res['LiveUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->liveUserNumber) {
            $res['LiveUserNumber'] = $this->liveUserNumber;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['InteractiveUserList'])) {
            if (!empty($map['InteractiveUserList'])) {
                $model->interactiveUserList = [];
                $n1 = 0;
                foreach ($map['InteractiveUserList'] as $item1) {
                    $model->interactiveUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InteractiveUserNumber'])) {
            $model->interactiveUserNumber = $map['InteractiveUserNumber'];
        }

        if (isset($map['IsChannelExists'])) {
            $model->isChannelExists = $map['IsChannelExists'];
        }

        if (isset($map['LiveUserList'])) {
            if (!empty($map['LiveUserList'])) {
                $model->liveUserList = [];
                $n1 = 0;
                foreach ($map['LiveUserList'] as $item1) {
                    $model->liveUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LiveUserNumber'])) {
            $model->liveUserNumber = $map['LiveUserNumber'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
