<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListSetsResponseBody\sets;
use AlibabaCloud\Tea\Model;

class ListSetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sets[]
     */
    public $sets;
    protected $_name = [
        'nextMarker' => 'NextMarker',
        'requestId'  => 'RequestId',
        'sets'       => 'Sets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sets) {
            $res['Sets'] = [];
            if (null !== $this->sets && \is_array($this->sets)) {
                $n = 0;
                foreach ($this->sets as $item) {
                    $res['Sets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sets'])) {
            if (!empty($map['Sets'])) {
                $model->sets = [];
                $n           = 0;
                foreach ($map['Sets'] as $item) {
                    $model->sets[$n++] = null !== $item ? sets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
