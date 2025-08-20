<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp;

class CommonConfig extends Model
{
    /**
     * @var idp
     */
    public $idp;
    protected $_name = [
        'idp' => 'Idp',
    ];

    public function validate()
    {
        if (null !== $this->idp) {
            $this->idp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idp) {
            $res['Idp'] = null !== $this->idp ? $this->idp->toArray($noStream) : $this->idp;
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
        if (isset($map['Idp'])) {
            $model->idp = idp::fromMap($map['Idp']);
        }

        return $model;
    }
}
