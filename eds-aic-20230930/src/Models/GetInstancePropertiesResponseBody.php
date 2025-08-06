<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetInstancePropertiesResponseBody\propertyTemplateModel;

class GetInstancePropertiesResponseBody extends Model
{
    /**
     * @var propertyTemplateModel
     */
    public $propertyTemplateModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'propertyTemplateModel' => 'PropertyTemplateModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->propertyTemplateModel) {
            $this->propertyTemplateModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyTemplateModel) {
            $res['PropertyTemplateModel'] = null !== $this->propertyTemplateModel ? $this->propertyTemplateModel->toArray($noStream) : $this->propertyTemplateModel;
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
        if (isset($map['PropertyTemplateModel'])) {
            $model->propertyTemplateModel = propertyTemplateModel::fromMap($map['PropertyTemplateModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
