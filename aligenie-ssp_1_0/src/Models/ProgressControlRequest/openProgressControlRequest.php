<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlRequest;

use AlibabaCloud\Dara\Model;

class openProgressControlRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var int
     */
    public $progress;
    protected $_name = [
        'extendInfo' => 'ExtendInfo',
        'progress' => 'Progress',
    ];

    public function validate()
    {
        if (\is_array($this->extendInfo)) {
            Model::validateArray($this->extendInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendInfo) {
            if (\is_array($this->extendInfo)) {
                $res['ExtendInfo'] = [];
                foreach ($this->extendInfo as $key1 => $value1) {
                    $res['ExtendInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (isset($map['ExtendInfo'])) {
            if (!empty($map['ExtendInfo'])) {
                $model->extendInfo = [];
                foreach ($map['ExtendInfo'] as $key1 => $value1) {
                    $model->extendInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
