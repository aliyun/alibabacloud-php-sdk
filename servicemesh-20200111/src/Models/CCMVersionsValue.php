<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CCMVersionsValue extends Model
{
    /**
     * @var string
     */
    public $queryState;

    /**
     * @var string
     */
    public $version;

    /**
     * @var bool
     */
    public $SLBGracefulDrainSupport;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'queryState'              => 'QueryState',
        'version'                 => 'Version',
        'SLBGracefulDrainSupport' => 'SLBGracefulDrainSupport',
        'clusterId'               => 'ClusterId',
        'message'                 => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryState) {
            $res['QueryState'] = $this->queryState;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->SLBGracefulDrainSupport) {
            $res['SLBGracefulDrainSupport'] = $this->SLBGracefulDrainSupport;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CCMVersionsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryState'])) {
            $model->queryState = $map['QueryState'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['SLBGracefulDrainSupport'])) {
            $model->SLBGracefulDrainSupport = $map['SLBGracefulDrainSupport'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
