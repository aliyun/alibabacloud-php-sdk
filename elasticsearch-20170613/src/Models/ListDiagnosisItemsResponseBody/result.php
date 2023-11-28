<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnosisItemsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 诊断集群写数据是否有堆积当集群的数据写入存在堆积时，会造成BulkReject异常，可能会导致数据丢失，且会造成系统资源消耗严重
     *
     * @var string
     */
    public $description;

    /**
     * @example ClusterBulkRejectDiagnostic
     *
     * @var string
     */
    public $key;

    /**
     * @example 索引写入BulkReject诊断
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'description',
        'key'         => 'key',
        'name'        => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
