<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class CreateNodeGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $nodeGroupShrink;

    /**
     * @var string
     */
    public $nodeUnitShrink;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'nodeGroupShrink' => 'NodeGroup',
        'nodeUnitShrink' => 'NodeUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->nodeGroupShrink) {
            $res['NodeGroup'] = $this->nodeGroupShrink;
        }

        if (null !== $this->nodeUnitShrink) {
            $res['NodeUnit'] = $this->nodeUnitShrink;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['NodeGroup'])) {
            $model->nodeGroupShrink = $map['NodeGroup'];
        }

        if (isset($map['NodeUnit'])) {
            $model->nodeUnitShrink = $map['NodeUnit'];
        }

        return $model;
    }
}
