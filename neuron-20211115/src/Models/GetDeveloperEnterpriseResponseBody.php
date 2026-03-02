<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class GetDeveloperEnterpriseResponseBody extends Model
{
    /**
     * @var Enterprise
     */
    public $enterprise;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enterprise' => 'enterprise',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->enterprise) {
            $this->enterprise->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enterprise) {
            $res['enterprise'] = null !== $this->enterprise ? $this->enterprise->toArray($noStream) : $this->enterprise;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['enterprise'])) {
            $model->enterprise = Enterprise::fromMap($map['enterprise']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
