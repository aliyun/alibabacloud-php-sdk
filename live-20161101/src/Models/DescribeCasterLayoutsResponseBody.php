<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts;
use AlibabaCloud\Tea\Model;

class DescribeCasterLayoutsResponseBody extends Model
{
    /**
     * @description The layouts.
     *
     * @var layouts
     */
    public $layouts;

    /**
     * @description The request ID.
     *
     * @example The normalized value of the width of the video layer image.
     *
     *   If the FillMode parameter of the video layer is set to none, the height of the video image is scaled based on this parameter. The default value is **0**, which indicates that the video image is displayed in the original size.
     *   If the FillMode parameter of the video layer is set to fit, the value of the parameter is greater than **0**.
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries.
     *
     * @example 3
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'layouts' => 'Layouts',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->layouts) {
            $res['Layouts'] = null !== $this->layouts ? $this->layouts->toMap() : null;
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
     * @return DescribeCasterLayoutsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layouts'])) {
            $model->layouts = layouts::fromMap($map['Layouts']);
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
