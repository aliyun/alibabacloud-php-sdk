<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class QueryEccInfoRequest extends Model
{
    /**
     * @var string
     */
    public $eccId;
    protected $_name = [
        'eccId' => 'EccId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
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
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }

        return $model;
    }
}
