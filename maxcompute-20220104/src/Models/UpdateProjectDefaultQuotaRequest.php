<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class UpdateProjectDefaultQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $quota;
    protected $_name = [
        'quota' => 'quota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
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
        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }

        return $model;
    }
}
