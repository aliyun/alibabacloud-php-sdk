<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteIntegrationsRequest extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $integrationId;
    protected $_name = [
        'integrationId' => 'IntegrationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIntegrationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntegrationId'])) {
            $model->integrationId = $map['IntegrationId'];
        }

        return $model;
    }
}
