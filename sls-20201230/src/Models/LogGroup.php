<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class LogGroup extends Model
{
    /**
     * @var LogTag[]
     */
    public $logTags;

    /**
     * @var LogItem[]
     */
    public $logs;

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
        'logTags' => 'LogTags',
        'logs'    => 'Logs',
        'source'  => 'Source',
        'topic'   => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logTags) {
            $res['LogTags'] = [];
            if (null !== $this->logTags && \is_array($this->logTags)) {
                $n = 0;
                foreach ($this->logTags as $item) {
                    $res['LogTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['LogTags'])) {
            if (!empty($map['LogTags'])) {
                $model->logTags = [];
                $n              = 0;
                foreach ($map['LogTags'] as $item) {
                    $model->logTags[$n++] = null !== $item ? LogTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n           = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? LogItem::fromMap($item) : $item;
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
