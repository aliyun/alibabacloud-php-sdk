<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestsResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveRequestsResponseBody\data\infoCount;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of risks in the previous 30 days.
     *
     * @example 23
     *
     * @var int
     */
    public $abnormalCount;

    /**
     * @description The API.
     *
     * @example /api/users/login
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the API.
     *
     * @example 09559c0d71ca2ffc996b81***836d8
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The IP address.
     *
     * @example 103.118.55.**
     *
     * @var string
     */
    public $clientIP;

    /**
     * @description The evaluation result. Valid values:
     *
     *   **leak**: Data leaks may occur.
     *   **none**: No data leak can occur.
     *
     * @example leak
     *
     * @var string
     */
    public $detectionResult;

    /**
     * @description The number of events in the previous 30 days.
     *
     * @example 679
     *
     * @var int
     */
    public $eventCount;

    /**
     * @description The statistics of the sensitive data.
     *
     * @var infoCount[]
     */
    public $infoCount;

    /**
     * @description The domain name of the API.
     *
     * @example a.****.com
     *
     * @var string
     */
    public $matchedHost;

    /**
     * @description The sensitive data.
     *
     * @var string[]
     */
    public $sensitiveList;
    protected $_name = [
        'abnormalCount'   => 'AbnormalCount',
        'apiFormat'       => 'ApiFormat',
        'apiId'           => 'ApiId',
        'clientIP'        => 'ClientIP',
        'detectionResult' => 'DetectionResult',
        'eventCount'      => 'EventCount',
        'infoCount'       => 'InfoCount',
        'matchedHost'     => 'MatchedHost',
        'sensitiveList'   => 'SensitiveList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['InfoCount'] = [];
            if (null !== $this->infoCount && \is_array($this->infoCount)) {
                $n = 0;
                foreach ($this->infoCount as $item) {
                    $res['InfoCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }
        if (null !== $this->sensitiveList) {
            $res['SensitiveList'] = $this->sensitiveList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                = 0;
                foreach ($map['InfoCount'] as $item) {
                    $model->infoCount[$n++] = null !== $item ? infoCount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }
        if (isset($map['SensitiveList'])) {
            if (!empty($map['SensitiveList'])) {
                $model->sensitiveList = $map['SensitiveList'];
            }
        }

        return $model;
    }
}
