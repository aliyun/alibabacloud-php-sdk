<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class StartTranscription extends Model
{
    /**
     * @var string
     */
    public $playCode;

    /**
     * @var mixed[]
     */
    public $metaData;

    /**
     * @var bool
     */
    public $selfDirected;
    protected $_name = [
        'playCode' => 'playCode',
        'metaData' => 'metaData',
        'selfDirected' => 'selfDirected',
    ];

    public function validate()
    {
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playCode) {
            $res['playCode'] = $this->playCode;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['metaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['metaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->selfDirected) {
            $res['selfDirected'] = $this->selfDirected;
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
        if (isset($map['playCode'])) {
            $model->playCode = $map['playCode'];
        }

        if (isset($map['metaData'])) {
            if (!empty($map['metaData'])) {
                $model->metaData = [];
                foreach ($map['metaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['selfDirected'])) {
            $model->selfDirected = $map['selfDirected'];
        }

        return $model;
    }
}
