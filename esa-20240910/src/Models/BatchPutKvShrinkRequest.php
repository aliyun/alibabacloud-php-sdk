<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class BatchPutKvShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $kvListShrink;
    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'kvListShrink' => 'KvList',
        'namespace'    => 'Namespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kvListShrink) {
            $res['KvList'] = $this->kvListShrink;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['KvList'])) {
            $model->kvListShrink = $map['KvList'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
