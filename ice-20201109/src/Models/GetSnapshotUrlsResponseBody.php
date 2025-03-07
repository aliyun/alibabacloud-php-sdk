<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetSnapshotUrlsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of snapshot URLs.
     *
     * @var string[]
     */
    public $snapshotUrls;

    /**
     * @description The total number of snapshots.
     *
     * @example 30
     *
     * @var int
     */
    public $total;

    /**
     * @description The URL of the WebVTT file.
     *
     * @example http://test-bucket.oss-cn-shanghai.aliyuncs.com/ouoput.vtt
     *
     * @var string
     */
    public $webVTTUrl;
    protected $_name = [
        'requestId'    => 'RequestId',
        'snapshotUrls' => 'SnapshotUrls',
        'total'        => 'Total',
        'webVTTUrl'    => 'WebVTTUrl',
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
        if (null !== $this->snapshotUrls) {
            $res['SnapshotUrls'] = $this->snapshotUrls;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->webVTTUrl) {
            $res['WebVTTUrl'] = $this->webVTTUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSnapshotUrlsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotUrls'])) {
            if (!empty($map['SnapshotUrls'])) {
                $model->snapshotUrls = $map['SnapshotUrls'];
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['WebVTTUrl'])) {
            $model->webVTTUrl = $map['WebVTTUrl'];
        }

        return $model;
    }
}
