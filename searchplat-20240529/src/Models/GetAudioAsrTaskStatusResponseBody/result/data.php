<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetAudioAsrTaskStatusResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $end;

    /**
     * @var float
     */
    public $start;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'end' => 'end',
        'start' => 'start',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
