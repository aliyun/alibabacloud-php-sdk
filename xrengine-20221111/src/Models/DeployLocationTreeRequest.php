<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models;

use AlibabaCloud\Dara\Model;

class DeployLocationTreeRequest extends Model
{
    /**
     * @var bool
     */
    public $forceUpdate;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var int
     */
    public $svcId;
    protected $_name = [
        'forceUpdate' => 'ForceUpdate',
        'jwtToken' => 'JwtToken',
        'svcId' => 'SvcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forceUpdate) {
            $res['ForceUpdate'] = $this->forceUpdate;
        }

        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
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
        if (isset($map['ForceUpdate'])) {
            $model->forceUpdate = $map['ForceUpdate'];
        }

        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        if (isset($map['SvcId'])) {
            $model->svcId = $map['SvcId'];
        }

        return $model;
    }
}
