<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvRequest\kvList;
use AlibabaCloud\Tea\Model;

class BatchPutKvRequest extends Model
{
    /**
     * @description The key-value pairs that you want to configure at a time. The total size can be up to 2 MB (2 × 1000 × 1000).
     *
     * This parameter is required.
     * @var kvList[]
     */
    public $kvList;

    /**
     * @description The name of the namespace that you specify when you call the [CreateKvNamespace](https://help.aliyun.com/document_detail/2850317.html) operation.
     *
     * This parameter is required.
     * @example test_namespace
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
     * @return BatchPutKvRequest
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
