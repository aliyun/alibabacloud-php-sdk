<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\resourceMetadata;

use AlibabaCloud\Dara\Model;

class resourcePropertyMetadata extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $propertyType;
    protected $_name = [
        'displayName' => 'DisplayName',
        'propertyName' => 'PropertyName',
        'propertyType' => 'PropertyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }

        if (null !== $this->propertyType) {
            $res['PropertyType'] = $this->propertyType;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }

        if (isset($map['PropertyType'])) {
            $model->propertyType = $map['PropertyType'];
        }

        return $model;
    }
}
