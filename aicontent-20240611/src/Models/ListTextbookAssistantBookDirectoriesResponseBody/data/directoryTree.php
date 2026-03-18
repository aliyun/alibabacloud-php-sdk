<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\directoryTree\topic;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\directoryTree\unit;

class directoryTree extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var topic[]
     */
    public $topic;

    /**
     * @var unit[]
     */
    public $unit;
    protected $_name = [
        'directoryId' => 'directoryId',
        'directoryName' => 'directoryName',
        'topic' => 'topic',
        'unit' => 'unit',
    ];

    public function validate()
    {
        if (\is_array($this->topic)) {
            Model::validateArray($this->topic);
        }
        if (\is_array($this->unit)) {
            Model::validateArray($this->unit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryName) {
            $res['directoryName'] = $this->directoryName;
        }

        if (null !== $this->topic) {
            if (\is_array($this->topic)) {
                $res['topic'] = [];
                $n1 = 0;
                foreach ($this->topic as $item1) {
                    $res['topic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unit) {
            if (\is_array($this->unit)) {
                $res['unit'] = [];
                $n1 = 0;
                foreach ($this->unit as $item1) {
                    $res['unit'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['directoryName'])) {
            $model->directoryName = $map['directoryName'];
        }

        if (isset($map['topic'])) {
            if (!empty($map['topic'])) {
                $model->topic = [];
                $n1 = 0;
                foreach ($map['topic'] as $item1) {
                    $model->topic[$n1] = topic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['unit'])) {
            if (!empty($map['unit'])) {
                $model->unit = [];
                $n1 = 0;
                foreach ($map['unit'] as $item1) {
                    $model->unit[$n1] = unit::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
