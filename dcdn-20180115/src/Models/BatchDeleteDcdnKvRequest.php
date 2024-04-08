<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteDcdnKvRequest extends Model
{
    /**
     * @var string[]
     */
    public $keys;

    /**
     * @example test_namespace
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'keys'      => 'Keys',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteDcdnKvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
