<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateIntegrationConfigRequest extends Model
{
    /**
     * @example 601FA6A2-AC5C-4B59-BE11-378F887A6A11
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1
     *
     * @var int
     */
    public $monitorSourceId;
    protected $_name = [
        'clientToken'     => 'clientToken',
        'monitorSourceId' => 'monitorSourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntegrationConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }

        return $model;
    }
}
