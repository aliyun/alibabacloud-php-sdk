<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class LogGroup extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var LogItem[]
     */
    public $logItems;

    /**
     * @var LogTag[]
     */
    public $logTags;

    /**
     * @example 192.1.1.1
     *
     * @var string
     */
    public $source;

    /**
     * @example topic-test
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'logItems' => 'LogItems',
        'logTags'  => 'LogTags',
        'source'   => 'Source',
        'topic'    => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logItems) {
            $res['LogItems'] = [];
            if (null !== $this->logItems && \is_array($this->logItems)) {
                $n = 0;
                foreach ($this->logItems as $item) {
                    $res['LogItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logTags) {
            $res['LogTags'] = [];
            if (null !== $this->logTags && \is_array($this->logTags)) {
                $n = 0;
                foreach ($this->logTags as $item) {
                    $res['LogTags'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return LogGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogItems'])) {
            if (!empty($map['LogItems'])) {
                $model->logItems = [];
                $n               = 0;
                foreach ($map['LogItems'] as $item) {
                    $model->logItems[$n++] = null !== $item ? LogItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogTags'])) {
            if (!empty($map['LogTags'])) {
                $model->logTags = [];
                $n              = 0;
                foreach ($map['LogTags'] as $item) {
                    $model->logTags[$n++] = null !== $item ? LogTag::fromMap($item) : $item;
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
