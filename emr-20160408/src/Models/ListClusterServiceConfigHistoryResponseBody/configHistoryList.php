<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryResponseBody\configHistoryList\configHistory;
use AlibabaCloud\Tea\Model;

class configHistoryList extends Model
{
    /**
     * @var configHistory[]
     */
    public $configHistory;
    protected $_name = [
        'configHistory' => 'ConfigHistory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configHistory) {
            $res['ConfigHistory'] = [];
            if (null !== $this->configHistory && \is_array($this->configHistory)) {
                $n = 0;
                foreach ($this->configHistory as $item) {
                    $res['ConfigHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configHistoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigHistory'])) {
            if (!empty($map['ConfigHistory'])) {
                $model->configHistory = [];
                $n                    = 0;
                foreach ($map['ConfigHistory'] as $item) {
                    $model->configHistory[$n++] = null !== $item ? configHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
