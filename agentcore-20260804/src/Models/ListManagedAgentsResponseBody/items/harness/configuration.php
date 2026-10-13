<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListManagedAgentsResponseBody\items\harness;

use AlibabaCloud\Dara\Model;

class configuration extends Model
{
    /**
     * @var string
     */
    public $connectorServiceAccountKey;

    /**
     * @var string
     */
    public $connectorServiceAccountName;
    protected $_name = [
        'connectorServiceAccountKey' => 'connectorServiceAccountKey',
        'connectorServiceAccountName' => 'connectorServiceAccountName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorServiceAccountKey) {
            $res['connectorServiceAccountKey'] = $this->connectorServiceAccountKey;
        }

        if (null !== $this->connectorServiceAccountName) {
            $res['connectorServiceAccountName'] = $this->connectorServiceAccountName;
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
        if (isset($map['connectorServiceAccountKey'])) {
            $model->connectorServiceAccountKey = $map['connectorServiceAccountKey'];
        }

        if (isset($map['connectorServiceAccountName'])) {
            $model->connectorServiceAccountName = $map['connectorServiceAccountName'];
        }

        return $model;
    }
}
