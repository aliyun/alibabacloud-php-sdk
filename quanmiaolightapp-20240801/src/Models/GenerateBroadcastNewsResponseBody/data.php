<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody\data\hotTopicSummaries;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody\data\usage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var hotTopicSummaries[]
     */
    public $hotTopicSummaries;

    /**
     * @example 2bb0ea82dafd48a8817fadc4c90e2b52
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 3feb69ed02d9b1a17d0f1a942675d300
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'hotTopicSummaries' => 'hotTopicSummaries',
        'sessionId'         => 'sessionId',
        'taskId'            => 'taskId',
        'text'              => 'text',
        'usage'             => 'usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotTopicSummaries) {
            $res['hotTopicSummaries'] = [];
            if (null !== $this->hotTopicSummaries && \is_array($this->hotTopicSummaries)) {
                $n = 0;
                foreach ($this->hotTopicSummaries as $item) {
                    $res['hotTopicSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hotTopicSummaries'])) {
            if (!empty($map['hotTopicSummaries'])) {
                $model->hotTopicSummaries = [];
                $n                        = 0;
                foreach ($map['hotTopicSummaries'] as $item) {
                    $model->hotTopicSummaries[$n++] = null !== $item ? hotTopicSummaries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
