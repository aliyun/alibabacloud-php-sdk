<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class RefreshNodeGroupNodesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $maxDisruptiveAction;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $nodeIdsShrink;
    protected $_name = [
        'maxDisruptiveAction' => 'MaxDisruptiveAction',
        'nodeGroupId' => 'NodeGroupId',
        'nodeIdsShrink' => 'NodeIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxDisruptiveAction) {
            $res['MaxDisruptiveAction'] = $this->maxDisruptiveAction;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeIdsShrink) {
            $res['NodeIds'] = $this->nodeIdsShrink;
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
        if (isset($map['MaxDisruptiveAction'])) {
            $model->maxDisruptiveAction = $map['MaxDisruptiveAction'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeIds'])) {
            $model->nodeIdsShrink = $map['NodeIds'];
        }

        return $model;
    }
}
