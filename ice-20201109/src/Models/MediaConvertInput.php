<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class MediaConvertInput extends Model
{
    /**
     * @var MediaObject
     */
    public $inputFile;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'inputFile' => 'InputFile',
        'name'      => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->inputFile) {
            $this->inputFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputFile) {
            $res['InputFile'] = null !== $this->inputFile ? $this->inputFile->toArray($noStream) : $this->inputFile;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['InputFile'])) {
            $model->inputFile = MediaObject::fromMap($map['InputFile']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
