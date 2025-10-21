<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Resource extends Model
{
    /**
     * @var ResourceSpec
     */
    public $elasticResource;

    /**
     * @var ResourceSpec
     */
    public $fixedResource;
    protected $_name = [
        'elasticResource' => 'elasticResource',
        'fixedResource' => 'fixedResource',
    ];

    public function validate()
    {
        if (null !== $this->elasticResource) {
            $this->elasticResource->validate();
        }
        if (null !== $this->fixedResource) {
            $this->fixedResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticResource) {
            $res['elasticResource'] = null !== $this->elasticResource ? $this->elasticResource->toArray($noStream) : $this->elasticResource;
        }

        if (null !== $this->fixedResource) {
            $res['fixedResource'] = null !== $this->fixedResource ? $this->fixedResource->toArray($noStream) : $this->fixedResource;
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
        if (isset($map['elasticResource'])) {
            $model->elasticResource = ResourceSpec::fromMap($map['elasticResource']);
        }

        if (isset($map['fixedResource'])) {
            $model->fixedResource = ResourceSpec::fromMap($map['fixedResource']);
        }

        return $model;
    }
}
