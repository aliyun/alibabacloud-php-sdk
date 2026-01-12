<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class BatchCreateSvcMapBindShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $mapIdsShrink;

    /**
     * @var int
     */
    public $svcId;
    protected $_name = [
        'jwtToken' => 'JwtToken',
        'mapIdsShrink' => 'MapIds',
        'svcId' => 'SvcId',
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

        if (null !== $this->mapIdsShrink) {
            $res['MapIds'] = $this->mapIdsShrink;
        }

        if (null !== $this->svcId) {
            $res['SvcId'] = $this->svcId;
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

        if (isset($map['MapIds'])) {
            $model->mapIdsShrink = $map['MapIds'];
        }

        if (isset($map['SvcId'])) {
            $model->svcId = $map['SvcId'];
        }

        return $model;
    }
}
