<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteKvShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $keysShrink;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'keysShrink' => 'Keys',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
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
        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
