<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\resourceMetadata;

use AlibabaCloud\Tea\Model;

class resourcePropertyMetadata extends Model
{
    /**
     * @description The display name of the resource property.
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The name of the resource property.
     *
     * @example AkLastUsedTime
     *
     * @var string
     */
    public $propertyName;

    /**
     * @description The type of the resource property.
     *
     * @example String
     *
     * @var string
     */
    public $propertyType;
    protected $_name = [
        'displayName'  => 'DisplayName',
        'propertyName' => 'PropertyName',
        'propertyType' => 'PropertyType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return resourcePropertyMetadata
     */
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
