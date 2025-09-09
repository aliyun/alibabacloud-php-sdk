<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceTemplateCriterionIssuesResponseBody\templateCriterionIssueList\criterionIssues;

use AlibabaCloud\Dara\Model;

class extendInfo extends Model
{
    /**
     * @var string
     */
    public $associationProperty;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'associationProperty' => 'AssociationProperty',
        'property' => 'Property',
        'propertyValue' => 'PropertyValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associationProperty) {
            $res['AssociationProperty'] = $this->associationProperty;
        }

        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }

        if (null !== $this->propertyValue) {
            $res['PropertyValue'] = $this->propertyValue;
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
        if (isset($map['AssociationProperty'])) {
            $model->associationProperty = $map['AssociationProperty'];
        }

        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }

        if (isset($map['PropertyValue'])) {
            $model->propertyValue = $map['PropertyValue'];
        }

        return $model;
    }
}
