<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncAvailableDBClusterListResponseBody\syncAvailableDBClusters;
use AlibabaCloud\Tea\Model;

class DescribeSyncAvailableDBClusterListResponseBody extends Model
{
    /**
     * @example FBD1DD96-AD1D-516C-9D9A-60BA081F66EE
     *
     * @var string
     */
    public $requestId;

    /**
     * @var syncAvailableDBClusters[]
     */
    public $syncAvailableDBClusters;
    protected $_name = [
        'requestId'               => 'RequestId',
        'syncAvailableDBClusters' => 'SyncAvailableDBClusters',
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
        if (null !== $this->syncAvailableDBClusters) {
            $res['SyncAvailableDBClusters'] = [];
            if (null !== $this->syncAvailableDBClusters && \is_array($this->syncAvailableDBClusters)) {
                $n = 0;
                foreach ($this->syncAvailableDBClusters as $item) {
                    $res['SyncAvailableDBClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyncAvailableDBClusterListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SyncAvailableDBClusters'])) {
            if (!empty($map['SyncAvailableDBClusters'])) {
                $model->syncAvailableDBClusters = [];
                $n                              = 0;
                foreach ($map['SyncAvailableDBClusters'] as $item) {
                    $model->syncAvailableDBClusters[$n++] = null !== $item ? syncAvailableDBClusters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
