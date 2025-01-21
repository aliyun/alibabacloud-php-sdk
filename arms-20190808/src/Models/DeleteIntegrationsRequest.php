<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteIntegrationsRequest extends Model
{
    /**
     * @var int
     */
    public $integrationId;
    protected $_name = [
        'integrationId' => 'IntegrationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->integrationId) {
            $res['IntegrationId'] = $this->integrationId;
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
        if (isset($map['IntegrationId'])) {
            $model->integrationId = $map['IntegrationId'];
        }

        return $model;
    }
}
