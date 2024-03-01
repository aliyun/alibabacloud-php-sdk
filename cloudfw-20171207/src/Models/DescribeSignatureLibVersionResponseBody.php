<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSignatureLibVersionResponseBody\version;
use AlibabaCloud\Tea\Model;

class DescribeSignatureLibVersionResponseBody extends Model
{
    /**
     * @example 9C50C2A9-4BBB-5504-8ADA-C41A79B8C946
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 132
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var version[]
     */
    public $version;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'version'    => 'Version',
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
        if (null !== $this->version) {
            $res['Version'] = [];
            if (null !== $this->version && \is_array($this->version)) {
                $n = 0;
                foreach ($this->version as $item) {
                    $res['Version'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSignatureLibVersionResponseBody
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
        if (isset($map['Version'])) {
            if (!empty($map['Version'])) {
                $model->version = [];
                $n              = 0;
                foreach ($map['Version'] as $item) {
                    $model->version[$n++] = null !== $item ? version::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
