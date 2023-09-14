<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndPointTrafficPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class serviceManagedInfos extends Model
{
    /**
     * @description Managed policy action name, Valid values:
     * - CreateChild
     * @example Update
     *
     * @var string
     */
    public $action;

    /**
     * @description Sub resource type, Valid values:
     *
     * >Only valid when the Action parameter is CreateChild.
     * @example Listener
     *
     * @var string
     */
    public $childType;

    /**
     * @description Is the managed policy action managed, Valid values:
     *
     * - false: The managed policy action is not managed, and users have permission to perform the operation specified in the Action on the managed instance.
     * @example false
     *
     * @var bool
     */
    public $isManaged;
    protected $_name = [
        'action'    => 'Action',
        'childType' => 'ChildType',
        'isManaged' => 'IsManaged',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return serviceManagedInfos
     */
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
