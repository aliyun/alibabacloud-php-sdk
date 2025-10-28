<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeleteEcuRequest extends Model
{
    /**
     * @var string
     */
    public $ecuId;
    protected $_name = [
        'ecuId' => 'EcuId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
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
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }

        return $model;
    }
}
