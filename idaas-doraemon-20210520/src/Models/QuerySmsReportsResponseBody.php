<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\QuerySmsReportsResponseBody\smsReports;
use AlibabaCloud\Tea\Model;

class QuerySmsReportsResponseBody extends Model
{
    /**
     * @example 4581B16-xxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @var smsReports[]
     */
    public $smsReports;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalElements;
    protected $_name = [
        'requestId'     => 'RequestId',
        'smsReports'    => 'SmsReports',
        'totalElements' => 'TotalElements',
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
        if (null !== $this->smsReports) {
            $res['SmsReports'] = [];
            if (null !== $this->smsReports && \is_array($this->smsReports)) {
                $n = 0;
                foreach ($this->smsReports as $item) {
                    $res['SmsReports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalElements) {
            $res['TotalElements'] = $this->totalElements;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmsReportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmsReports'])) {
            if (!empty($map['SmsReports'])) {
                $model->smsReports = [];
                $n                 = 0;
                foreach ($map['SmsReports'] as $item) {
                    $model->smsReports[$n++] = null !== $item ? smsReports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalElements'])) {
            $model->totalElements = $map['TotalElements'];
        }

        return $model;
    }
}
