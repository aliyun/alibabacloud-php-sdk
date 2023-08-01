<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class LogGroup extends Model
{
    /**
     * @var LogTag
     */
    public $logTags;

    /**
     * @var LogItem
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
            $res['LogTags'] = null !== $this->logTags ? $this->logTags->toMap() : null;
        }
        if (null !== $this->logs) {
            $res['Logs'] = null !== $this->logs ? $this->logs->toMap() : null;
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
            $model->logTags = LogTag::fromMap($map['LogTags']);
        }
        if (isset($map['Logs'])) {
            $model->logs = LogItem::fromMap($map['Logs']);
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
