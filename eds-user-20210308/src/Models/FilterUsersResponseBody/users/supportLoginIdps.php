<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return supportLoginIdps
     */
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
