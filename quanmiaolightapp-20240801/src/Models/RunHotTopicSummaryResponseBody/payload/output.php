<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryResponseBody\payload;

use AlibabaCloud\Dara\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $topicId;
    protected $_name = [
        'text' => 'text',
        'topicId' => 'topicId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->topicId) {
            $res['topicId'] = $this->topicId;
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
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['topicId'])) {
            $model->topicId = $map['topicId'];
        }

        return $model;
    }
}
