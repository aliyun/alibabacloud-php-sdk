<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ImportK8sClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $enableAsm;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'enableAsm' => 'EnableAsm',
        'mode' => 'Mode',
        'namespaceId' => 'NamespaceId',
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

        if (null !== $this->enableAsm) {
            $res['EnableAsm'] = $this->enableAsm;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
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

        if (isset($map['EnableAsm'])) {
            $model->enableAsm = $map['EnableAsm'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
