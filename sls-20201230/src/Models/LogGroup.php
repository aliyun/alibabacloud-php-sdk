<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class LogGroup extends Model
{
    /**
     * @var LogItem[]
     */
    public $logItems;

    /**
     * @var LogTag[]
     */
    public $logTags;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'logItems' => 'LogItems',
        'logTags' => 'LogTags',
        'source' => 'Source',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (\is_array($this->logItems)) {
            Model::validateArray($this->logItems);
        }
        if (\is_array($this->logTags)) {
            Model::validateArray($this->logTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logItems) {
            if (\is_array($this->logItems)) {
                $res['LogItems'] = [];
                $n1 = 0;
                foreach ($this->logItems as $item1) {
                    $res['LogItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logTags) {
            if (\is_array($this->logTags)) {
                $res['LogTags'] = [];
                $n1 = 0;
                foreach ($this->logTags as $item1) {
                    $res['LogTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['LogItems'])) {
            if (!empty($map['LogItems'])) {
                $model->logItems = [];
                $n1 = 0;
                foreach ($map['LogItems'] as $item1) {
                    $model->logItems[$n1++] = LogItem::fromMap($item1);
                }
            }
        }

        if (isset($map['LogTags'])) {
            if (!empty($map['LogTags'])) {
                $model->logTags = [];
                $n1 = 0;
                foreach ($map['LogTags'] as $item1) {
                    $model->logTags[$n1++] = LogTag::fromMap($item1);
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
