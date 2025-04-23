<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users;

use AlibabaCloud\Dara\Model;

class supportLoginIdps extends Model
{
    /**
     * @var string
     */
    public $idpId;

    /**
     * @var string
     */
    public $idpName;
    protected $_name = [
        'idpId' => 'IdpId',
        'idpName' => 'IdpName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
        }

        if (null !== $this->idpName) {
            $res['IdpName'] = $this->idpName;
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
        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
        }

        if (isset($map['IdpName'])) {
            $model->idpName = $map['IdpName'];
        }

        return $model;
    }
}
