<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ScaleClusterNodePoolShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bodyShrink;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $nodepoolId;
    protected $_name = [
        'bodyShrink' => 'Body',
        'clusterId' => 'ClusterId',
        'nodepoolId' => 'NodepoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyShrink) {
            $res['Body'] = $this->bodyShrink;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->nodepoolId) {
            $res['NodepoolId'] = $this->nodepoolId;
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
        if (isset($map['Body'])) {
            $model->bodyShrink = $map['Body'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['NodepoolId'])) {
            $model->nodepoolId = $map['NodepoolId'];
        }

        return $model;
    }
}
