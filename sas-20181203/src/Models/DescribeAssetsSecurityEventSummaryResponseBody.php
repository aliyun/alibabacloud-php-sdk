<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetsSecurityEventSummaryResponseBody\assets;
use AlibabaCloud\Tea\Model;

class DescribeAssetsSecurityEventSummaryResponseBody extends Model
{
    /**
     * @description An array that consists of risk information about containers.
     *
     * @var assets[]
     */
    public $assets;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example D03DD0FD-6041-5107-AC00-383E28F1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assets'    => 'Assets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assets) {
            $res['Assets'] = [];
            if (null !== $this->assets && \is_array($this->assets)) {
                $n = 0;
                foreach ($this->assets as $item) {
                    $res['Assets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetsSecurityEventSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Assets'])) {
            if (!empty($map['Assets'])) {
                $model->assets = [];
                $n             = 0;
                foreach ($map['Assets'] as $item) {
                    $model->assets[$n++] = null !== $item ? assets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
