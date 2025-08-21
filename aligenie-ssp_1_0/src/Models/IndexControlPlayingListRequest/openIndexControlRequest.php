<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest;

use AlibabaCloud\Dara\Model;

class openIndexControlRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var int
     */
    public $index;

    /**
     * @var bool
     */
    public $needContentContinued;
    protected $_name = [
        'extendInfo' => 'ExtendInfo',
        'index' => 'Index',
        'needContentContinued' => 'NeedContentContinued',
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

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->needContentContinued) {
            $res['NeedContentContinued'] = $this->needContentContinued;
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

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['NeedContentContinued'])) {
            $model->needContentContinued = $map['NeedContentContinued'];
        }

        return $model;
    }
}
