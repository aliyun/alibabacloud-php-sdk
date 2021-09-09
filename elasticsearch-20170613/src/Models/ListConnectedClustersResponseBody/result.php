<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersResponseBody\result\result[]
     */
    public $result;
    protected $_name = [
        'result' => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? \AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListConnectedClustersResponseBody\result\result::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
