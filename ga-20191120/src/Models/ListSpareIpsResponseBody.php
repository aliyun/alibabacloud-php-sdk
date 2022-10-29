<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsResponseBody\spareIps;
use AlibabaCloud\Tea\Model;

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
        'spareIps'  => 'SpareIps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spareIps) {
            $res['SpareIps'] = [];
            if (null !== $this->spareIps && \is_array($this->spareIps)) {
                $n = 0;
                foreach ($this->spareIps as $item) {
                    $res['SpareIps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSpareIpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpareIps'])) {
            if (!empty($map['SpareIps'])) {
                $model->spareIps = [];
                $n               = 0;
                foreach ($map['SpareIps'] as $item) {
                    $model->spareIps[$n++] = null !== $item ? spareIps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
