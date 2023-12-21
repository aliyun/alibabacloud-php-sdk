<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCrowdsResponseBody\crowds;
use AlibabaCloud\Tea\Model;

class ListCrowdsResponseBody extends Model
{
    /**
     * @var crowds[]
     */
    public $crowds;

    /**
     * @description Id of the request
     *
     * @example 9763624B-5FBB-5E3A-9193-B1ADB554CEAE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'crowds'     => 'Crowds',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crowds) {
            $res['Crowds'] = [];
            if (null !== $this->crowds && \is_array($this->crowds)) {
                $n = 0;
                foreach ($this->crowds as $item) {
                    $res['Crowds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCrowdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Crowds'])) {
            if (!empty($map['Crowds'])) {
                $model->crowds = [];
                $n             = 0;
                foreach ($map['Crowds'] as $item) {
                    $model->crowds[$n++] = null !== $item ? crowds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
