<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListStatisticReportResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example F65C8BB2-C14F-5983-888B-41C4E082D3BC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried reports. Valid values:
     *
     * For more information about the metrics in query analysis reports, see the Query analysis metrics section of [Metrics of statistical reports](~~187654~~).
     * @example []
     *
     * @var mixed[][]
     */
    public $result;

    /**
     * @description The total number of the queried reports.
     *
     * @example 43
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'requestId',
        'result'     => 'result',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStatisticReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = $map['result'];
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
