<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateKnowledgeSourceRequest\document;

use AlibabaCloud\Dara\Model;

class weCom extends Model
{
    /**
     * @var string
     */
    public $botId;

    /**
     * @var string
     */
    public $botSecret;

    /**
     * @var string[]
     */
    public $spaceIds;
    protected $_name = [
        'botId' => 'BotId',
        'botSecret' => 'BotSecret',
        'spaceIds' => 'SpaceIds',
    ];

    public function validate()
    {
        if (\is_array($this->spaceIds)) {
            Model::validateArray($this->spaceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }

        if (null !== $this->botSecret) {
            $res['BotSecret'] = $this->botSecret;
        }

        if (null !== $this->spaceIds) {
            if (\is_array($this->spaceIds)) {
                $res['SpaceIds'] = [];
                $n1 = 0;
                foreach ($this->spaceIds as $item1) {
                    $res['SpaceIds'][$n1] = $item1;
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
        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }

        if (isset($map['BotSecret'])) {
            $model->botSecret = $map['BotSecret'];
        }

        if (isset($map['SpaceIds'])) {
            if (!empty($map['SpaceIds'])) {
                $model->spaceIds = [];
                $n1 = 0;
                foreach ($map['SpaceIds'] as $item1) {
                    $model->spaceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
