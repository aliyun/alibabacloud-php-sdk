<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateCalculationRequest extends Model
{
    /**
     * @var string
     */
    public $cloudCodeUserId;

    /**
     * @var string
     */
    public $queryString;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'cloudCodeUserId' => 'CloudCodeUserId',
        'queryString'     => 'QueryString',
        'clientToken'     => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudCodeUserId) {
            $res['CloudCodeUserId'] = $this->cloudCodeUserId;
        }
        if (null !== $this->queryString) {
            $res['QueryString'] = $this->queryString;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCalculationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudCodeUserId'])) {
            $model->cloudCodeUserId = $map['CloudCodeUserId'];
        }
        if (isset($map['QueryString'])) {
            $model->queryString = $map['QueryString'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
