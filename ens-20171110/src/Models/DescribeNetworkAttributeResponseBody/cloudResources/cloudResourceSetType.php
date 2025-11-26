<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\cloudResources;

use AlibabaCloud\Dara\Model;

class cloudResourceSetType extends Model
{
    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceCount' => 'ResourceCount',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
