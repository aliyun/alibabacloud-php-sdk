<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody\generalInstanceSpecStatistic;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetStatisticResponseBody\resourceSpecStatistic;

class DescribeAssetStatisticResponseBody extends Model
{
    /**
     * @var bool
     */
    public $autoResourceEnable;

    /**
     * @var generalInstanceSpecStatistic
     */
    public $generalInstanceSpecStatistic;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceSpecStatistic
     */
    public $resourceSpecStatistic;
    protected $_name = [
        'autoResourceEnable' => 'AutoResourceEnable',
        'generalInstanceSpecStatistic' => 'GeneralInstanceSpecStatistic',
        'requestId' => 'RequestId',
        'resourceSpecStatistic' => 'ResourceSpecStatistic',
    ];

    public function validate()
    {
        if (null !== $this->generalInstanceSpecStatistic) {
            $this->generalInstanceSpecStatistic->validate();
        }
        if (null !== $this->resourceSpecStatistic) {
            $this->resourceSpecStatistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoResourceEnable) {
            $res['AutoResourceEnable'] = $this->autoResourceEnable;
        }

        if (null !== $this->generalInstanceSpecStatistic) {
            $res['GeneralInstanceSpecStatistic'] = null !== $this->generalInstanceSpecStatistic ? $this->generalInstanceSpecStatistic->toArray($noStream) : $this->generalInstanceSpecStatistic;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceSpecStatistic) {
            $res['ResourceSpecStatistic'] = null !== $this->resourceSpecStatistic ? $this->resourceSpecStatistic->toArray($noStream) : $this->resourceSpecStatistic;
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
        if (isset($map['AutoResourceEnable'])) {
            $model->autoResourceEnable = $map['AutoResourceEnable'];
        }

        if (isset($map['GeneralInstanceSpecStatistic'])) {
            $model->generalInstanceSpecStatistic = generalInstanceSpecStatistic::fromMap($map['GeneralInstanceSpecStatistic']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceSpecStatistic'])) {
            $model->resourceSpecStatistic = resourceSpecStatistic::fromMap($map['ResourceSpecStatistic']);
        }

        return $model;
    }
}
