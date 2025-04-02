<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIPodcast\V20250228\Models\PodcastTaskResultQueryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed
     */
    public $resultUrl;

    /**
     * @var string
     */
    public $script;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'resultUrl' => 'resultUrl',
        'script' => 'script',
        'taskId' => 'taskId',
        'taskStatus' => 'taskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultUrl) {
            $res['resultUrl'] = $this->resultUrl;
        }

        if (null !== $this->script) {
            $res['script'] = $this->script;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
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
        if (isset($map['resultUrl'])) {
            $model->resultUrl = $map['resultUrl'];
        }

        if (isset($map['script'])) {
            $model->script = $map['script'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
