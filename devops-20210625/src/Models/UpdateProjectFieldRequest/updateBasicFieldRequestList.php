<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldRequest;

use AlibabaCloud\Tea\Model;

class updateBasicFieldRequestList extends Model
{
    /**
     * @example name
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @var string
     */
    public $propertyValue;
    protected $_name = [
        'propertyKey'   => 'propertyKey',
        'propertyValue' => 'propertyValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyKey) {
            $res['propertyKey'] = $this->propertyKey;
        }
        if (null !== $this->propertyValue) {
            $res['propertyValue'] = $this->propertyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateBasicFieldRequestList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['propertyKey'])) {
            $model->propertyKey = $map['propertyKey'];
        }
        if (isset($map['propertyValue'])) {
            $model->propertyValue = $map['propertyValue'];
        }

        return $model;
    }
}
