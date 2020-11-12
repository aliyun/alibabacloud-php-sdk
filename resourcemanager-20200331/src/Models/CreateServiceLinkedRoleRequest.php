<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceLinkedRoleRequest extends Model
{
    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $customSuffix;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'serviceName'  => 'ServiceName',
        'customSuffix' => 'CustomSuffix',
        'description'  => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('serviceName', $this->serviceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->customSuffix) {
            $res['CustomSuffix'] = $this->customSuffix;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceLinkedRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['CustomSuffix'])) {
            $model->customSuffix = $map['CustomSuffix'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
