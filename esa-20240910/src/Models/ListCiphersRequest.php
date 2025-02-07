<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListCiphersRequest extends Model
{
    /**
     * @var string
     */
    public $ciphersGroup;
    protected $_name = [
        'ciphersGroup' => 'CiphersGroup',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ciphersGroup) {
            $res['CiphersGroup'] = $this->ciphersGroup;
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
        if (isset($map['CiphersGroup'])) {
            $model->ciphersGroup = $map['CiphersGroup'];
        }

        return $model;
    }
}
