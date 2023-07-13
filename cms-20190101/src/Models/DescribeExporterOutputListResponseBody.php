<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints;
use AlibabaCloud\Tea\Model;

class DescribeExporterOutputListResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * > The status code 200 indicates that the request was successful. Other status codes indicate that the request failed.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The configuration sets for exporting monitoring data.
     *
     * @var datapoints
     */
    public $datapoints;

    /**
     * @description The returned message.
     *
     * @example sucess
     *
     * @var string
     */
    public $message;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The request ID.
     *
     * @example 0E657631-CD6C-4C24-9637-98D000B9272C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of returned entries.
     *
     * @example 25
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'       => 'Code',
        'datapoints' => 'Datapoints',
        'message'    => 'Message',
        'pageNumber' => 'PageNumber',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'total'      => 'Total',
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
        if (null !== $this->datapoints) {
            $res['Datapoints'] = null !== $this->datapoints ? $this->datapoints->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
     * @return DescribeExporterOutputListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Datapoints'])) {
            $model->datapoints = datapoints::fromMap($map['Datapoints']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
