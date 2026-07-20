<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class UpdateSessionNetworkConfig extends Model
{
    /**
     * @var string[]
     */
    public $allowOut;

    /**
     * @var string[]
     */
    public $denyOut;
    protected $_name = [
        'allowOut' => 'allowOut',
        'denyOut' => 'denyOut',
    ];

    public function validate()
    {
        if (\is_array($this->allowOut)) {
            Model::validateArray($this->allowOut);
        }
        if (\is_array($this->denyOut)) {
            Model::validateArray($this->denyOut);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowOut) {
            if (\is_array($this->allowOut)) {
                $res['allowOut'] = [];
                $n1 = 0;
                foreach ($this->allowOut as $item1) {
                    $res['allowOut'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->denyOut) {
            if (\is_array($this->denyOut)) {
                $res['denyOut'] = [];
                $n1 = 0;
                foreach ($this->denyOut as $item1) {
                    $res['denyOut'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['allowOut'])) {
            if (!empty($map['allowOut'])) {
                $model->allowOut = [];
                $n1 = 0;
                foreach ($map['allowOut'] as $item1) {
                    $model->allowOut[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['denyOut'])) {
            if (!empty($map['denyOut'])) {
                $model->denyOut = [];
                $n1 = 0;
                foreach ($map['denyOut'] as $item1) {
                    $model->denyOut[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
