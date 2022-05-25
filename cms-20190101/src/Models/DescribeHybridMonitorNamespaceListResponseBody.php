<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace;
use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorNamespaceListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var describeHybridMonitorNamespace[]
     */
    public $describeHybridMonitorNamespace;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code'                           => 'Code',
        'describeHybridMonitorNamespace' => 'DescribeHybridMonitorNamespace',
        'message'                        => 'Message',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'requestId'                      => 'RequestId',
        'success'                        => 'Success',
        'total'                          => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->describeHybridMonitorNamespace) {
            $res['DescribeHybridMonitorNamespace'] = [];
            if (null !== $this->describeHybridMonitorNamespace && \is_array($this->describeHybridMonitorNamespace)) {
                $n = 0;
                foreach ($this->describeHybridMonitorNamespace as $item) {
                    $res['DescribeHybridMonitorNamespace'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridMonitorNamespaceListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DescribeHybridMonitorNamespace'])) {
            if (!empty($map['DescribeHybridMonitorNamespace'])) {
                $model->describeHybridMonitorNamespace = [];
                $n                                     = 0;
                foreach ($map['DescribeHybridMonitorNamespace'] as $item) {
                    $model->describeHybridMonitorNamespace[$n++] = null !== $item ? describeHybridMonitorNamespace::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
