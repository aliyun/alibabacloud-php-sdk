<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCDNStatisResponseBody\CDNStatisList;

class GetCDNStatisResponseBody extends Model
{
    /**
     * @var CDNStatisList
     */
    public $CDNStatisList;

    /**
     * @var int
     */
    public $maxBpsDataValue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sumFlowDataValue;
    protected $_name = [
        'CDNStatisList' => 'CDNStatisList',
        'maxBpsDataValue' => 'MaxBpsDataValue',
        'requestId' => 'RequestId',
        'sumFlowDataValue' => 'SumFlowDataValue',
    ];

    public function validate()
    {
        if (null !== $this->CDNStatisList) {
            $this->CDNStatisList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CDNStatisList) {
            $res['CDNStatisList'] = null !== $this->CDNStatisList ? $this->CDNStatisList->toArray($noStream) : $this->CDNStatisList;
        }

        if (null !== $this->maxBpsDataValue) {
            $res['MaxBpsDataValue'] = $this->maxBpsDataValue;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sumFlowDataValue) {
            $res['SumFlowDataValue'] = $this->sumFlowDataValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CDNStatisList'])) {
            $model->CDNStatisList = CDNStatisList::fromMap($map['CDNStatisList']);
        }

        if (isset($map['MaxBpsDataValue'])) {
            $model->maxBpsDataValue = $map['MaxBpsDataValue'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SumFlowDataValue'])) {
            $model->sumFlowDataValue = $map['SumFlowDataValue'];
        }

        return $model;
    }
}
