<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLogHubAttributeResponseBody\loghubInfo;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLogHubAttributeResponseBody\loghubInfo\logHubStores\logHubStore;
use AlibabaCloud\Tea\Model;

class logHubStores extends Model
{
    /**
     * @var logHubStore[]
     */
    public $logHubStore;
    protected $_name = [
        'logHubStore' => 'LogHubStore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logHubStore) {
            $res['LogHubStore'] = [];
            if (null !== $this->logHubStore && \is_array($this->logHubStore)) {
                $n = 0;
                foreach ($this->logHubStore as $item) {
                    $res['LogHubStore'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logHubStores
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogHubStore'])) {
            if (!empty($map['LogHubStore'])) {
                $model->logHubStore = [];
                $n                  = 0;
                foreach ($map['LogHubStore'] as $item) {
                    $model->logHubStore[$n++] = null !== $item ? logHubStore::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
