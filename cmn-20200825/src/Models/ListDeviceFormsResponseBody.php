<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceFormsResponseBody\deviceForms;
use AlibabaCloud\Tea\Model;

class ListDeviceFormsResponseBody extends Model
{
    /**
     * @var deviceForms[]
     */
    public $deviceForms;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 11
     *
     * @var int
     */
    public $nextToken;

    /**
     * @example 6d439436-ddde-4f26-aaf6-0470099b5c35
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'deviceForms' => 'DeviceForms',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceForms) {
            $res['DeviceForms'] = [];
            if (null !== $this->deviceForms && \is_array($this->deviceForms)) {
                $n = 0;
                foreach ($this->deviceForms as $item) {
                    $res['DeviceForms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListDeviceFormsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceForms'])) {
            if (!empty($map['DeviceForms'])) {
                $model->deviceForms = [];
                $n                  = 0;
                foreach ($map['DeviceForms'] as $item) {
                    $model->deviceForms[$n++] = null !== $item ? deviceForms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
