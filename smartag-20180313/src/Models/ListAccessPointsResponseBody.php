<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\ListAccessPointsResponseBody\accessPoints;
use AlibabaCloud\Tea\Model;

class ListAccessPointsResponseBody extends Model
{
    /**
     * @var accessPoints[]
     */
    public $accessPoints;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessPoints' => 'AccessPoints',
        'totalCount'   => 'TotalCount',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPoints) {
            $res['AccessPoints'] = [];
            if (null !== $this->accessPoints && \is_array($this->accessPoints)) {
                $n = 0;
                foreach ($this->accessPoints as $item) {
                    $res['AccessPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessPointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPoints'])) {
            if (!empty($map['AccessPoints'])) {
                $model->accessPoints = [];
                $n                   = 0;
                foreach ($map['AccessPoints'] as $item) {
                    $model->accessPoints[$n++] = null !== $item ? accessPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
