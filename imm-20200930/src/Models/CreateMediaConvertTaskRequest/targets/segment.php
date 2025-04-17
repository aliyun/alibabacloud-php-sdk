<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets;

use AlibabaCloud\Dara\Model;

class segment extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $startNumber;
    protected $_name = [
        'duration' => 'Duration',
        'format' => 'Format',
        'startNumber' => 'StartNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->startNumber) {
            $res['StartNumber'] = $this->startNumber;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['StartNumber'])) {
            $model->startNumber = $map['StartNumber'];
        }

        return $model;
    }
}
