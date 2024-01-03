<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\QuerySmsUpsResponseBody\smsUps;
use AlibabaCloud\Tea\Model;

class QuerySmsUpsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var smsUps[]
     */
    public $smsUps;

    /**
     * @var int
     */
    public $totalElements;
    protected $_name = [
        'requestId'     => 'RequestId',
        'smsUps'        => 'SmsUps',
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
        if (null !== $this->smsUps) {
            $res['SmsUps'] = [];
            if (null !== $this->smsUps && \is_array($this->smsUps)) {
                $n = 0;
                foreach ($this->smsUps as $item) {
                    $res['SmsUps'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return QuerySmsUpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmsUps'])) {
            if (!empty($map['SmsUps'])) {
                $model->smsUps = [];
                $n             = 0;
                foreach ($map['SmsUps'] as $item) {
                    $model->smsUps[$n++] = null !== $item ? smsUps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalElements'])) {
            $model->totalElements = $map['TotalElements'];
        }

        return $model;
    }
}
