<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApiExportsResponseBody\apiExports;
use AlibabaCloud\Tea\Model;

class DescribeApiExportsResponseBody extends Model
{
    /**
     * @description The returned data export tasks.
     *
     * @var apiExports[]
     */
    public $apiExports;

    /**
     * @description The request ID.
     *
     * @example D9532525-E885-54E7-A178-D5554D563AFB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the data export task. Valid values:
     *
     *   **expired**: The file is expired.
     *   **exporting**: Data is being exported.
     *   **completed**: Data is exported.
     *
     * @example 7
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'apiExports' => 'ApiExports',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiExports) {
            $res['ApiExports'] = [];
            if (null !== $this->apiExports && \is_array($this->apiExports)) {
                $n = 0;
                foreach ($this->apiExports as $item) {
                    $res['ApiExports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiExportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiExports'])) {
            if (!empty($map['ApiExports'])) {
                $model->apiExports = [];
                $n                 = 0;
                foreach ($map['ApiExports'] as $item) {
                    $model->apiExports[$n++] = null !== $item ? apiExports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
