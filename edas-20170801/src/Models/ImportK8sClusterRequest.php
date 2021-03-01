<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ImportK8sClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var bool
     */
    public $enableAsm;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'namespaceId' => 'NamespaceId',
        'mode'        => 'Mode',
        'enableAsm'   => 'EnableAsm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->enableAsm) {
            $res['EnableAsm'] = $this->enableAsm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportK8sClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['EnableAsm'])) {
            $model->enableAsm = $map['EnableAsm'];
        }

        return $model;
    }
}
