<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMAliyunResourceSyncResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMAliyunResourceSyncResultResponseBody\data\subResults\resourceSyncSubResult;

class subResults extends Model
{
    /**
     * @var resourceSyncSubResult[]
     */
    public $resourceSyncSubResult;
    protected $_name = [
        'resourceSyncSubResult' => 'ResourceSyncSubResult',
    ];

    public function validate()
    {
        if (\is_array($this->resourceSyncSubResult)) {
            Model::validateArray($this->resourceSyncSubResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceSyncSubResult) {
            if (\is_array($this->resourceSyncSubResult)) {
                $res['ResourceSyncSubResult'] = [];
                $n1                           = 0;
                foreach ($this->resourceSyncSubResult as $item1) {
                    $res['ResourceSyncSubResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourceSyncSubResult'])) {
            if (!empty($map['ResourceSyncSubResult'])) {
                $model->resourceSyncSubResult = [];
                $n1                           = 0;
                foreach ($map['ResourceSyncSubResult'] as $item1) {
                    $model->resourceSyncSubResult[$n1++] = resourceSyncSubResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
