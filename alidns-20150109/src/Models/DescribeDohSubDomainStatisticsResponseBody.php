<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohSubDomainStatisticsResponseBody\statistics;

class DescribeDohSubDomainStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var statistics[]
     */
    public $statistics;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statistics' => 'Statistics',
    ];

    public function validate()
    {
        if (\is_array($this->statistics)) {
            Model::validateArray($this->statistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statistics) {
            if (\is_array($this->statistics)) {
                $res['Statistics'] = [];
                $n1                = 0;
                foreach ($this->statistics as $item1) {
                    $res['Statistics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Statistics'])) {
            if (!empty($map['Statistics'])) {
                $model->statistics = [];
                $n1                = 0;
                foreach ($map['Statistics'] as $item1) {
                    $model->statistics[$n1++] = statistics::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
