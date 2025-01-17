<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GetSnapshotUrlsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $snapshotUrls;
    /**
     * @var int
     */
    public $total;
    /**
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
        if (\is_array($this->snapshotUrls)) {
            Model::validateArray($this->snapshotUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapshotUrls) {
            if (\is_array($this->snapshotUrls)) {
                $res['SnapshotUrls'] = [];
                $n1                  = 0;
                foreach ($this->snapshotUrls as $item1) {
                    $res['SnapshotUrls'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->webVTTUrl) {
            $res['WebVTTUrl'] = $this->webVTTUrl;
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

        if (isset($map['SnapshotUrls'])) {
            if (!empty($map['SnapshotUrls'])) {
                $model->snapshotUrls = [];
                $n1                  = 0;
                foreach ($map['SnapshotUrls'] as $item1) {
                    $model->snapshotUrls[$n1++] = $item1;
                }
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
