<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody\data\hotTopicSummaries;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateBroadcastNewsResponseBody\data\usage;

class data extends Model
{
    /**
     * @var hotTopicSummaries[]
     */
    public $hotTopicSummaries;

    /**
     * @var string
     */
    public $sessionId;

    /**
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
        'sessionId' => 'sessionId',
        'taskId' => 'taskId',
        'text' => 'text',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->hotTopicSummaries)) {
            Model::validateArray($this->hotTopicSummaries);
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotTopicSummaries) {
            if (\is_array($this->hotTopicSummaries)) {
                $res['hotTopicSummaries'] = [];
                $n1 = 0;
                foreach ($this->hotTopicSummaries as $item1) {
                    $res['hotTopicSummaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['hotTopicSummaries'])) {
            if (!empty($map['hotTopicSummaries'])) {
                $model->hotTopicSummaries = [];
                $n1 = 0;
                foreach ($map['hotTopicSummaries'] as $item1) {
                    $model->hotTopicSummaries[$n1] = hotTopicSummaries::fromMap($item1);
                    ++$n1;
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
