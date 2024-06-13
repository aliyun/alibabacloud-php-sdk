<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\expiryKeysLevelCount\expiryLevel;
use AlibabaCloud\Tea\Model;

class expiryKeysLevelCount extends Model
{
    /**
     * @var expiryLevel[]
     */
    public $expiryLevel;
    protected $_name = [
        'expiryLevel' => 'ExpiryLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiryLevel) {
            $res['ExpiryLevel'] = [];
            if (null !== $this->expiryLevel && \is_array($this->expiryLevel)) {
                $n = 0;
                foreach ($this->expiryLevel as $item) {
                    $res['ExpiryLevel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expiryKeysLevelCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryLevel'])) {
            if (!empty($map['ExpiryLevel'])) {
                $model->expiryLevel = [];
                $n                  = 0;
                foreach ($map['ExpiryLevel'] as $item) {
                    $model->expiryLevel[$n++] = null !== $item ? expiryLevel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
