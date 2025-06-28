<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncAvailableDBClusterListResponseBody\syncAvailableDBClusters;

class DescribeSyncAvailableDBClusterListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var syncAvailableDBClusters[]
     */
    public $syncAvailableDBClusters;
    protected $_name = [
        'requestId' => 'RequestId',
        'syncAvailableDBClusters' => 'SyncAvailableDBClusters',
    ];

    public function validate()
    {
        if (\is_array($this->syncAvailableDBClusters)) {
            Model::validateArray($this->syncAvailableDBClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->syncAvailableDBClusters) {
            if (\is_array($this->syncAvailableDBClusters)) {
                $res['SyncAvailableDBClusters'] = [];
                $n1 = 0;
                foreach ($this->syncAvailableDBClusters as $item1) {
                    $res['SyncAvailableDBClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['SyncAvailableDBClusters'])) {
            if (!empty($map['SyncAvailableDBClusters'])) {
                $model->syncAvailableDBClusters = [];
                $n1 = 0;
                foreach ($map['SyncAvailableDBClusters'] as $item1) {
                    $model->syncAvailableDBClusters[$n1] = syncAvailableDBClusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
