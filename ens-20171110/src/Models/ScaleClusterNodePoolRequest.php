<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\ScaleClusterNodePoolRequest\body;

class ScaleClusterNodePoolRequest extends Model
{
    /**
     * @var body
     */
    public $body;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $nodepoolId;
    protected $_name = [
        'body' => 'Body',
        'clusterId' => 'ClusterId',
        'nodepoolId' => 'NodepoolId',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
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
            $model->body = body::fromMap($map['Body']);
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
