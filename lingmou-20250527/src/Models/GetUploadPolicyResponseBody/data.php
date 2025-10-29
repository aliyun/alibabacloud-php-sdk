<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\GetUploadPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LingMou\V20250527\Models\GetUploadPolicyResponseBody\data\ossPolicy;

class data extends Model
{
    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var ossPolicy
     */
    public $ossPolicy;
    protected $_name = [
        'ossKey' => 'ossKey',
        'ossPolicy' => 'ossPolicy',
    ];

    public function validate()
    {
        if (null !== $this->ossPolicy) {
            $this->ossPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossKey) {
            $res['ossKey'] = $this->ossKey;
        }

        if (null !== $this->ossPolicy) {
            $res['ossPolicy'] = null !== $this->ossPolicy ? $this->ossPolicy->toArray($noStream) : $this->ossPolicy;
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
        if (isset($map['ossKey'])) {
            $model->ossKey = $map['ossKey'];
        }

        if (isset($map['ossPolicy'])) {
            $model->ossPolicy = ossPolicy::fromMap($map['ossPolicy']);
        }

        return $model;
    }
}
