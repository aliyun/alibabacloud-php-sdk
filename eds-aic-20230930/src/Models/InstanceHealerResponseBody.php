<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstanceHealerResponseBody\instanceHealerModel;

class InstanceHealerResponseBody extends Model
{
    /**
     * @var instanceHealerModel
     */
    public $instanceHealerModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceHealerModel' => 'InstanceHealerModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceHealerModel) {
            $this->instanceHealerModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceHealerModel) {
            $res['InstanceHealerModel'] = null !== $this->instanceHealerModel ? $this->instanceHealerModel->toArray($noStream) : $this->instanceHealerModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceHealerModel'])) {
            $model->instanceHealerModel = instanceHealerModel::fromMap($map['InstanceHealerModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
