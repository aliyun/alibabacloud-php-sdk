<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestsResponseBody\data\infoCount;

class data extends Model
{
    /**
     * @var int
     */
    public $abnormalCount;

    /**
     * @var string
     */
    public $apiFormat;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $clientIP;

    /**
     * @var string
     */
    public $detectionResult;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var infoCount[]
     */
    public $infoCount;

    /**
     * @var string
     */
    public $matchedHost;

    /**
     * @var string[]
     */
    public $sensitiveList;
    protected $_name = [
        'abnormalCount' => 'AbnormalCount',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'clientIP' => 'ClientIP',
        'detectionResult' => 'DetectionResult',
        'eventCount' => 'EventCount',
        'infoCount' => 'InfoCount',
        'matchedHost' => 'MatchedHost',
        'sensitiveList' => 'SensitiveList',
    ];

    public function validate()
    {
        if (\is_array($this->infoCount)) {
            Model::validateArray($this->infoCount);
        }
        if (\is_array($this->sensitiveList)) {
            Model::validateArray($this->sensitiveList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalCount) {
            $res['AbnormalCount'] = $this->abnormalCount;
        }

        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }

        if (null !== $this->detectionResult) {
            $res['DetectionResult'] = $this->detectionResult;
        }

        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }

        if (null !== $this->infoCount) {
            if (\is_array($this->infoCount)) {
                $res['InfoCount'] = [];
                $n1 = 0;
                foreach ($this->infoCount as $item1) {
                    $res['InfoCount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }

        if (null !== $this->sensitiveList) {
            if (\is_array($this->sensitiveList)) {
                $res['SensitiveList'] = [];
                $n1 = 0;
                foreach ($this->sensitiveList as $item1) {
                    $res['SensitiveList'][$n1++] = $item1;
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
        if (isset($map['AbnormalCount'])) {
            $model->abnormalCount = $map['AbnormalCount'];
        }

        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }

        if (isset($map['DetectionResult'])) {
            $model->detectionResult = $map['DetectionResult'];
        }

        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }

        if (isset($map['InfoCount'])) {
            if (!empty($map['InfoCount'])) {
                $model->infoCount = [];
                $n1 = 0;
                foreach ($map['InfoCount'] as $item1) {
                    $model->infoCount[$n1++] = infoCount::fromMap($item1);
                }
            }
        }

        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }

        if (isset($map['SensitiveList'])) {
            if (!empty($map['SensitiveList'])) {
                $model->sensitiveList = [];
                $n1 = 0;
                foreach ($map['SensitiveList'] as $item1) {
                    $model->sensitiveList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
