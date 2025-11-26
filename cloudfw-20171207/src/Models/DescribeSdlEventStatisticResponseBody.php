<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeSdlEventStatisticResponseBody extends Model
{
    /**
     * @var int
     */
    public $aiSensitiveDataCount;

    /**
     * @var int
     */
    public $assetCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sensitiveDataCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalTraffic;
    protected $_name = [
        'aiSensitiveDataCount' => 'AiSensitiveDataCount',
        'assetCount' => 'AssetCount',
        'requestId' => 'RequestId',
        'sensitiveDataCount' => 'SensitiveDataCount',
        'totalCount' => 'TotalCount',
        'totalTraffic' => 'TotalTraffic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiSensitiveDataCount) {
            $res['AiSensitiveDataCount'] = $this->aiSensitiveDataCount;
        }

        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sensitiveDataCount) {
            $res['SensitiveDataCount'] = $this->sensitiveDataCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
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
        if (isset($map['AiSensitiveDataCount'])) {
            $model->aiSensitiveDataCount = $map['AiSensitiveDataCount'];
        }

        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SensitiveDataCount'])) {
            $model->sensitiveDataCount = $map['SensitiveDataCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }

        return $model;
    }
}
