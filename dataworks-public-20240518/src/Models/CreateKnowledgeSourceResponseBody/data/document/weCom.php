<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeSourceResponseBody\data\document;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeSourceResponseBody\data\document\weCom\spaces;

class weCom extends Model
{
    /**
     * @var string
     */
    public $botId;

    /**
     * @var spaces[]
     */
    public $spaces;
    protected $_name = [
        'botId' => 'BotId',
        'spaces' => 'Spaces',
    ];

    public function validate()
    {
        if (\is_array($this->spaces)) {
            Model::validateArray($this->spaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }

        if (null !== $this->spaces) {
            if (\is_array($this->spaces)) {
                $res['Spaces'] = [];
                $n1 = 0;
                foreach ($this->spaces as $item1) {
                    $res['Spaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Spaces'])) {
            if (!empty($map['Spaces'])) {
                $model->spaces = [];
                $n1 = 0;
                foreach ($map['Spaces'] as $item1) {
                    $model->spaces[$n1] = spaces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
