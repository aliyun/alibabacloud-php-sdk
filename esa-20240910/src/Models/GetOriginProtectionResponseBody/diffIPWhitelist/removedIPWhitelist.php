<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\diffIPWhitelist;

use AlibabaCloud\Dara\Model;

class removedIPWhitelist extends Model
{
    /**
     * @var string[]
     */
    public $IPv4;
    /**
     * @var string[]
     */
    public $IPv6;
    protected $_name = [
        'IPv4' => 'IPv4',
        'IPv6' => 'IPv6',
    ];

    public function validate()
    {
        if (\is_array($this->IPv4)) {
            Model::validateArray($this->IPv4);
        }
        if (\is_array($this->IPv6)) {
            Model::validateArray($this->IPv6);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPv4) {
            if (\is_array($this->IPv4)) {
                $res['IPv4'] = [];
                $n1          = 0;
                foreach ($this->IPv4 as $item1) {
                    $res['IPv4'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->IPv6) {
            if (\is_array($this->IPv6)) {
                $res['IPv6'] = [];
                $n1          = 0;
                foreach ($this->IPv6 as $item1) {
                    $res['IPv6'][$n1++] = $item1;
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
        if (isset($map['IPv4'])) {
            if (!empty($map['IPv4'])) {
                $model->IPv4 = [];
                $n1          = 0;
                foreach ($map['IPv4'] as $item1) {
                    $model->IPv4[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IPv6'])) {
            if (!empty($map['IPv6'])) {
                $model->IPv6 = [];
                $n1          = 0;
                foreach ($map['IPv6'] as $item1) {
                    $model->IPv6[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
