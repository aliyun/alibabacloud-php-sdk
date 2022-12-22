<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\SDK\Composer\V20181212\Models\ListVersionsResponseBody\versions;
use AlibabaCloud\Tea\Model;

class ListVersionsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ADB97A33-50E7-48A5-963D-ACBAE36D0BEC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of versions of the workflow.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description A list of the versions.
     *
     * @var versions[]
     */
    public $versions;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'versions'   => 'Versions',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->versions) {
            $res['Versions'] = [];
            if (null !== $this->versions && \is_array($this->versions)) {
                $n = 0;
                foreach ($this->versions as $item) {
                    $res['Versions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Versions'])) {
            if (!empty($map['Versions'])) {
                $model->versions = [];
                $n               = 0;
                foreach ($map['Versions'] as $item) {
                    $model->versions[$n++] = null !== $item ? versions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
