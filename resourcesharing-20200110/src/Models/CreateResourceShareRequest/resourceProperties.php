<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareRequest;

use AlibabaCloud\Dara\Model;

class resourceProperties extends Model
{
    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $resourceArn;
    protected $_name = [
        'property' => 'Property',
        'resourceArn' => 'ResourceArn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
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
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        return $model;
    }
}
