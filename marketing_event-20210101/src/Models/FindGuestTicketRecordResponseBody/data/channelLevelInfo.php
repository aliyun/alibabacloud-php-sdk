<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponseBody\data\channelLevelInfo\levelOneOwner;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponseBody\data\channelLevelInfo\levelThreeOwner;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponseBody\data\channelLevelInfo\levelTwoOwner;

class channelLevelInfo extends Model
{
    /**
     * @var int
     */
    public $channelId;

    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $levelOneChannelName;

    /**
     * @var levelOneOwner[]
     */
    public $levelOneOwner;

    /**
     * @var string
     */
    public $levelThreeChannelName;

    /**
     * @var levelThreeOwner[]
     */
    public $levelThreeOwner;

    /**
     * @var string
     */
    public $levelTwoChannelName;

    /**
     * @var levelTwoOwner[]
     */
    public $levelTwoOwner;
    protected $_name = [
        'channelId' => 'ChannelId',
        'channelName' => 'ChannelName',
        'levelOneChannelName' => 'LevelOneChannelName',
        'levelOneOwner' => 'LevelOneOwner',
        'levelThreeChannelName' => 'LevelThreeChannelName',
        'levelThreeOwner' => 'LevelThreeOwner',
        'levelTwoChannelName' => 'LevelTwoChannelName',
        'levelTwoOwner' => 'LevelTwoOwner',
    ];

    public function validate()
    {
        if (\is_array($this->levelOneOwner)) {
            Model::validateArray($this->levelOneOwner);
        }
        if (\is_array($this->levelThreeOwner)) {
            Model::validateArray($this->levelThreeOwner);
        }
        if (\is_array($this->levelTwoOwner)) {
            Model::validateArray($this->levelTwoOwner);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->levelOneChannelName) {
            $res['LevelOneChannelName'] = $this->levelOneChannelName;
        }

        if (null !== $this->levelOneOwner) {
            if (\is_array($this->levelOneOwner)) {
                $res['LevelOneOwner'] = [];
                $n1 = 0;
                foreach ($this->levelOneOwner as $item1) {
                    $res['LevelOneOwner'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->levelThreeChannelName) {
            $res['LevelThreeChannelName'] = $this->levelThreeChannelName;
        }

        if (null !== $this->levelThreeOwner) {
            if (\is_array($this->levelThreeOwner)) {
                $res['LevelThreeOwner'] = [];
                $n1 = 0;
                foreach ($this->levelThreeOwner as $item1) {
                    $res['LevelThreeOwner'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->levelTwoChannelName) {
            $res['LevelTwoChannelName'] = $this->levelTwoChannelName;
        }

        if (null !== $this->levelTwoOwner) {
            if (\is_array($this->levelTwoOwner)) {
                $res['LevelTwoOwner'] = [];
                $n1 = 0;
                foreach ($this->levelTwoOwner as $item1) {
                    $res['LevelTwoOwner'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['LevelOneChannelName'])) {
            $model->levelOneChannelName = $map['LevelOneChannelName'];
        }

        if (isset($map['LevelOneOwner'])) {
            if (!empty($map['LevelOneOwner'])) {
                $model->levelOneOwner = [];
                $n1 = 0;
                foreach ($map['LevelOneOwner'] as $item1) {
                    $model->levelOneOwner[$n1] = levelOneOwner::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LevelThreeChannelName'])) {
            $model->levelThreeChannelName = $map['LevelThreeChannelName'];
        }

        if (isset($map['LevelThreeOwner'])) {
            if (!empty($map['LevelThreeOwner'])) {
                $model->levelThreeOwner = [];
                $n1 = 0;
                foreach ($map['LevelThreeOwner'] as $item1) {
                    $model->levelThreeOwner[$n1] = levelThreeOwner::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LevelTwoChannelName'])) {
            $model->levelTwoChannelName = $map['LevelTwoChannelName'];
        }

        if (isset($map['LevelTwoOwner'])) {
            if (!empty($map['LevelTwoOwner'])) {
                $model->levelTwoOwner = [];
                $n1 = 0;
                foreach ($map['LevelTwoOwner'] as $item1) {
                    $model->levelTwoOwner[$n1] = levelTwoOwner::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
