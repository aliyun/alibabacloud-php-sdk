<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishKgSchemaRequest\publishCommand\dataAdjustmentPolicies;

use AlibabaCloud\Dara\Model;

class backFillDefaultValuePolicy extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $propertyCode;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'propertyCode' => 'PropertyCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->propertyCode) {
            $res['PropertyCode'] = $this->propertyCode;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['PropertyCode'])) {
            $model->propertyCode = $map['PropertyCode'];
        }

        return $model;
    }
}
