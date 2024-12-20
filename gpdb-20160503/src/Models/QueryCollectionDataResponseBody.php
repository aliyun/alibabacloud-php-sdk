<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches;
use AlibabaCloud\Tea\Model;

class QueryCollectionDataResponseBody extends Model
{
    /**
     * @description Data list.
     *
     * @var matches
     */
    public $matches;

    /**
     * @description Detailed information when the request fails.
     *
     * @example 0.1234
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID.
     *
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Status, with the following values:
     * - **success**: Success.
     * - **fail**: Failure.
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description Only returned when the Offset is not 0, this value represents the total number of hits for the search criteria.
     *
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'matches'   => 'Matches',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'status'    => 'Status',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matches) {
            $res['Matches'] = null !== $this->matches ? $this->matches->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCollectionDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Matches'])) {
            $model->matches = matches::fromMap($map['Matches']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
