<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class GetArEditUgcMaterialRequest extends Model
{
    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var int
     */
    public $mapId;
    protected $_name = [
        'jwtToken' => 'JwtToken',
        'mapId' => 'MapId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        if (null !== $this->mapId) {
            $res['MapId'] = $this->mapId;
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
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['MapId'])) {
            $model->mapId = $map['MapId'];
        }

        return $model;
    }
}
