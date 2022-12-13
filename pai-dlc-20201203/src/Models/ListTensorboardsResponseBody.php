<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListTensorboardsResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @var Tensorboard[]
     */
    public $tensorboards;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'    => 'RequestId',
        'tensorboards' => 'Tensorboards',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->tensorboards) {
            $res['Tensorboards'] = [];
            if (null !== $this->tensorboards && \is_array($this->tensorboards)) {
                $n = 0;
                foreach ($this->tensorboards as $item) {
                    $res['Tensorboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTensorboardsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tensorboards'])) {
            if (!empty($map['Tensorboards'])) {
                $model->tensorboards = [];
                $n                   = 0;
                foreach ($map['Tensorboards'] as $item) {
                    $model->tensorboards[$n++] = null !== $item ? Tensorboard::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
