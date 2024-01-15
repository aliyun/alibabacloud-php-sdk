<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class PutWebtrackingRequest extends Model
{
    /**
     * @description The logs. Each element is a JSON object that indicates a log.
     *
     * >  **Note**: The time in a log that is collected by using the web tracking feature is the time at which Simple Log Service receives the log. You do not need to configure the \__time\_\_ field for each log. If this field exists, it is overwritten by the time at which Simple Log Service receives the log.
     * @var string[][]
     */
    public $logs;

    /**
     * @description The source of the logs.
     *
     * @example source
     *
     * @var string
     */
    public $source;

    /**
     * @description The tags of the logs.
     *
     * @var string[]
     */
    public $tags;

    /**
     * @description The topic of the logs.
     *
     * @example topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'logs'   => '__logs__',
        'source' => '__source__',
        'tags'   => '__tags__',
        'topic'  => '__topic__',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logs) {
            $res['__logs__'] = $this->logs;
        }
        if (null !== $this->source) {
            $res['__source__'] = $this->source;
        }
        if (null !== $this->tags) {
            $res['__tags__'] = $this->tags;
        }
        if (null !== $this->topic) {
            $res['__topic__'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutWebtrackingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['__logs__'])) {
            if (!empty($map['__logs__'])) {
                $model->logs = $map['__logs__'];
            }
        }
        if (isset($map['__source__'])) {
            $model->source = $map['__source__'];
        }
        if (isset($map['__tags__'])) {
            $model->tags = $map['__tags__'];
        }
        if (isset($map['__topic__'])) {
            $model->topic = $map['__topic__'];
        }

        return $model;
    }
}
