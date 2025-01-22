<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class RevokeUserSessionRequest extends Model
{
    /**
     * @var string
     */
    public $externalIds;
    /**
     * @var string
     */
    public $idpId;
    protected $_name = [
        'externalIds' => 'ExternalIds',
        'idpId'       => 'IdpId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalIds) {
            $res['ExternalIds'] = $this->externalIds;
        }

        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
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
        if (isset($map['ExternalIds'])) {
            $model->externalIds = $map['ExternalIds'];
        }

        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
        }

        return $model;
    }
}
