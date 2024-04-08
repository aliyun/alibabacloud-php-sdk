<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchPutDcdnKvRequest\kvList;
use AlibabaCloud\Tea\Model;

class BatchPutDcdnKvRequest extends Model
{
    /**
     * @var kvList[]
     */
    public $kvList;

    /**
     * @description The name of the namespace.
     *
     * @example ns1
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'kvList'    => 'KvList',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kvList) {
            $res['KvList'] = [];
            if (null !== $this->kvList && \is_array($this->kvList)) {
                $n = 0;
                foreach ($this->kvList as $item) {
                    $res['KvList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchPutDcdnKvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KvList'])) {
            if (!empty($map['KvList'])) {
                $model->kvList = [];
                $n             = 0;
                foreach ($map['KvList'] as $item) {
                    $model->kvList[$n++] = null !== $item ? kvList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
