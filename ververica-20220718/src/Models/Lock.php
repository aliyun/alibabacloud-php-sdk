<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Lock extends Model
{
    /**
     * @var string
     */
    public $holderId;

    /**
     * @var string
     */
    public $holderName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'holderId'   => 'holderId',
        'holderName' => 'holderName',
        'id'         => 'id',
        'namespace'  => 'namespace',
        'workspace'  => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->holderId) {
            $res['holderId'] = $this->holderId;
        }
        if (null !== $this->holderName) {
            $res['holderName'] = $this->holderName;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Lock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['holderId'])) {
            $model->holderId = $map['holderId'];
        }
        if (isset($map['holderName'])) {
            $model->holderName = $map['holderName'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
