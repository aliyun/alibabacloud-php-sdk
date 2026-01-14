<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndPointTrafficPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class serviceManagedInfos extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $childType;

    /**
     * @var bool
     */
    public $isManaged;
    protected $_name = [
        'action' => 'Action',
        'childType' => 'ChildType',
        'isManaged' => 'IsManaged',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->childType) {
            $res['ChildType'] = $this->childType;
        }

        if (null !== $this->isManaged) {
            $res['IsManaged'] = $this->isManaged;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ChildType'])) {
            $model->childType = $map['ChildType'];
        }

        if (isset($map['IsManaged'])) {
            $model->isManaged = $map['IsManaged'];
        }

        return $model;
    }
}
