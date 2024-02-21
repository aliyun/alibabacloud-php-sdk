<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\keyPrefixes\prefix;
use AlibabaCloud\Tea\Model;

class keyPrefixes extends Model
{
    /**
     * @var prefix[]
     */
    public $prefix;
    protected $_name = [
        'prefix' => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefix) {
            $res['Prefix'] = [];
            if (null !== $this->prefix && \is_array($this->prefix)) {
                $n = 0;
                foreach ($this->prefix as $item) {
                    $res['Prefix'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPrefixes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prefix'])) {
            if (!empty($map['Prefix'])) {
                $model->prefix = [];
                $n             = 0;
                foreach ($map['Prefix'] as $item) {
                    $model->prefix[$n++] = null !== $item ? prefix::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
