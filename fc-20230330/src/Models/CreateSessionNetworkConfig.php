<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class CreateSessionNetworkConfig extends Model
{
    /**
     * @var string[]
     */
    public $allowOut;

    /**
     * @var bool
     */
    public $allowPublicTraffic;

    /**
     * @var string[]
     */
    public $denyOut;

    /**
     * @var string
     */
    public $maskRequestHost;
    protected $_name = [
        'allowOut' => 'allowOut',
        'allowPublicTraffic' => 'allowPublicTraffic',
        'denyOut' => 'denyOut',
        'maskRequestHost' => 'maskRequestHost',
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

        if (null !== $this->allowPublicTraffic) {
            $res['allowPublicTraffic'] = $this->allowPublicTraffic;
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

        if (null !== $this->maskRequestHost) {
            $res['maskRequestHost'] = $this->maskRequestHost;
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

        if (isset($map['allowPublicTraffic'])) {
            $model->allowPublicTraffic = $map['allowPublicTraffic'];
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

        if (isset($map['maskRequestHost'])) {
            $model->maskRequestHost = $map['maskRequestHost'];
        }

        return $model;
    }
}
