<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class ModifyTagNameRequest extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $newKey;
    protected $_name = [
        'key' => 'Key',
        'newKey' => 'NewKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->newKey) {
            $res['NewKey'] = $this->newKey;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['NewKey'])) {
            $model->newKey = $map['NewKey'];
        }

        return $model;
    }
}
