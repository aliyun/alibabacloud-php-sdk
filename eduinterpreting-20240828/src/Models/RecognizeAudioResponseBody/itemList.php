<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduInterpreting\V20240828\Models\RecognizeAudioResponseBody;

use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 1230
     *
     * @var string
     */
    public $endTime;

    /**
     * @example How are you
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
        'text'      => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
