<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetSnapshotUrlsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @description 截图URL
     *
     * @var string[]
     */
    public $snapshotUrls;

    /**
     * @description 截图总数量
     *
     * @var int
     */
    public $total;

    /**
     * @description WebVTT文件URL
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
