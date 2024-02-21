<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data\list_\cacheAnalysisJob;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobsResponseBody\data\list_\cacheAnalysisJob\bigKeys\keyInfo;
use AlibabaCloud\Tea\Model;

class bigKeys extends Model
{
    /**
     * @var keyInfo[]
     */
    public $keyInfo;
    protected $_name = [
        'keyInfo' => 'KeyInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyInfo) {
            $res['KeyInfo'] = [];
            if (null !== $this->keyInfo && \is_array($this->keyInfo)) {
                $n = 0;
                foreach ($this->keyInfo as $item) {
                    $res['KeyInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bigKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyInfo'])) {
            if (!empty($map['KeyInfo'])) {
                $model->keyInfo = [];
                $n              = 0;
                foreach ($map['KeyInfo'] as $item) {
                    $model->keyInfo[$n++] = null !== $item ? keyInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
