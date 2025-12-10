<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceLinkedRoleRequest extends Model
{
    /**
     * @var string
     */
    public $customSuffix;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'customSuffix' => 'CustomSuffix',
        'description' => 'Description',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customSuffix) {
            $res['CustomSuffix'] = $this->customSuffix;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['CustomSuffix'])) {
            $model->customSuffix = $map['CustomSuffix'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
