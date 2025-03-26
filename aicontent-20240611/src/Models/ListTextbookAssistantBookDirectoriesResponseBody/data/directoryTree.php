<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\directoryTree\topic;

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
    protected $_name = [
        'directoryId' => 'directoryId',
        'directoryName' => 'directoryName',
        'topic' => 'topic',
    ];

    public function validate()
    {
        if (\is_array($this->topic)) {
            Model::validateArray($this->topic);
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
                    $res['topic'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                    $model->topic[$n1++] = topic::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
