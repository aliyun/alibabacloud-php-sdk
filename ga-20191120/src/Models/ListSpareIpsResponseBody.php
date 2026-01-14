<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsResponseBody\spareIps;

class ListSpareIpsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var spareIps[]
     */
    public $spareIps;
    protected $_name = [
        'requestId' => 'RequestId',
        'spareIps' => 'SpareIps',
    ];

    public function validate()
    {
        if (\is_array($this->spareIps)) {
            Model::validateArray($this->spareIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->spareIps) {
            if (\is_array($this->spareIps)) {
                $res['SpareIps'] = [];
                $n1 = 0;
                foreach ($this->spareIps as $item1) {
                    $res['SpareIps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SpareIps'])) {
            if (!empty($map['SpareIps'])) {
                $model->spareIps = [];
                $n1 = 0;
                foreach ($map['SpareIps'] as $item1) {
                    $model->spareIps[$n1] = spareIps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
