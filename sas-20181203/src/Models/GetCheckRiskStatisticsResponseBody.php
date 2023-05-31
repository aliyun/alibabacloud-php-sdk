<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetCheckRiskStatisticsResponseBody extends Model
{
    /**
     * @description The number of risk scenarios.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description An array consisting of the statistics on check items that are used in risk scenarios.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 2C455672-2490-5211-84EC-420C7818****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'     => 'Count',
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetCheckRiskStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
