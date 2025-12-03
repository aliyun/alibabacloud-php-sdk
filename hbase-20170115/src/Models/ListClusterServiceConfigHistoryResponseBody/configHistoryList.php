<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigHistoryResponseBody\configHistoryList\configHistory;

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
        if (\is_array($this->configHistory)) {
            Model::validateArray($this->configHistory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configHistory) {
            if (\is_array($this->configHistory)) {
                $res['ConfigHistory'] = [];
                $n1 = 0;
                foreach ($this->configHistory as $item1) {
                    $res['ConfigHistory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConfigHistory'])) {
            if (!empty($map['ConfigHistory'])) {
                $model->configHistory = [];
                $n1 = 0;
                foreach ($map['ConfigHistory'] as $item1) {
                    $model->configHistory[$n1] = configHistory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
