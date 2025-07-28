<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetInstancePropertiesResponseBody\propertyTemplateModel;
use AlibabaCloud\Tea\Model;

class GetInstancePropertiesResponseBody extends Model
{
    /**
     * @var propertyTemplateModel
     */
    public $propertyTemplateModel;

    /**
     * @description Id of the request
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'propertyTemplateModel' => 'PropertyTemplateModel',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyTemplateModel) {
            $res['PropertyTemplateModel'] = null !== $this->propertyTemplateModel ? $this->propertyTemplateModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstancePropertiesResponseBody
     */
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
