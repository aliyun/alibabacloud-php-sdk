<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserListResponseBody\userList\faultList;

class userList extends Model
{
    /**
     * @var int
     */
    public $channelCreatedTs;
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var int
     */
    public $createdTs;
    /**
     * @var int
     */
    public $destroyedTs;
    /**
     * @var faultList[]
     */
    public $faultList;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'channelCreatedTs' => 'ChannelCreatedTs',
        'channelId'        => 'ChannelId',
        'createdTs'        => 'CreatedTs',
        'destroyedTs'      => 'DestroyedTs',
        'faultList'        => 'FaultList',
        'userId'           => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->faultList)) {
            Model::validateArray($this->faultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelCreatedTs) {
            $res['ChannelCreatedTs'] = $this->channelCreatedTs;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }

        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }

        if (null !== $this->faultList) {
            if (\is_array($this->faultList)) {
                $res['FaultList'] = [];
                $n1               = 0;
                foreach ($this->faultList as $item1) {
                    $res['FaultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ChannelCreatedTs'])) {
            $model->channelCreatedTs = $map['ChannelCreatedTs'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }

        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }

        if (isset($map['FaultList'])) {
            if (!empty($map['FaultList'])) {
                $model->faultList = [];
                $n1               = 0;
                foreach ($map['FaultList'] as $item1) {
                    $model->faultList[$n1++] = faultList::fromMap($item1);
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
