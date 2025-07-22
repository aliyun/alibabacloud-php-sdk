<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultResponseBody\data\subResults\resourceSyncSubResult;
use AlibabaCloud\Tea\Model;

class subResults extends Model
{
    /**
     * @var resourceSyncSubResult[]
     */
    public $resourceSyncSubResult;
    protected $_name = [
        'resourceSyncSubResult' => 'ResourceSyncSubResult',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceSyncSubResult) {
            $res['ResourceSyncSubResult'] = [];
            if (null !== $this->resourceSyncSubResult && \is_array($this->resourceSyncSubResult)) {
                $n = 0;
                foreach ($this->resourceSyncSubResult as $item) {
                    $res['ResourceSyncSubResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceSyncSubResult'])) {
            if (!empty($map['ResourceSyncSubResult'])) {
                $model->resourceSyncSubResult = [];
                $n = 0;
                foreach ($map['ResourceSyncSubResult'] as $item) {
                    $model->resourceSyncSubResult[$n++] = null !== $item ? resourceSyncSubResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
