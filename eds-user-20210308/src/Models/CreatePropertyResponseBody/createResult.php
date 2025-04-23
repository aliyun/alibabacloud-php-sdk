<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponseBody\createResult\savePropertyValueModel;

class createResult extends Model
{
    /**
     * @var int
     */
    public $propertyId;

    /**
     * @var string
     */
    public $propertyKey;

    /**
     * @var savePropertyValueModel
     */
    public $savePropertyValueModel;
    protected $_name = [
        'propertyId' => 'PropertyId',
        'propertyKey' => 'PropertyKey',
        'savePropertyValueModel' => 'SavePropertyValueModel',
    ];

    public function validate()
    {
        if (null !== $this->savePropertyValueModel) {
            $this->savePropertyValueModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }

        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }

        if (null !== $this->savePropertyValueModel) {
            $res['SavePropertyValueModel'] = null !== $this->savePropertyValueModel ? $this->savePropertyValueModel->toArray($noStream) : $this->savePropertyValueModel;
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
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }

        if (isset($map['SavePropertyValueModel'])) {
            $model->savePropertyValueModel = savePropertyValueModel::fromMap($map['SavePropertyValueModel']);
        }

        return $model;
    }
}
