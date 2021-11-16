<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIntegrationConfigsRequest extends Model
{
    /**
     * @description 幂等id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $monitorSourceName;
    protected $_name = [
        'clientToken'       => 'clientToken',
        'monitorSourceName' => 'monitorSourceName',
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
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIntegrationConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }

        return $model;
    }
}
