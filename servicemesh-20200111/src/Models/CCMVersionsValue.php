<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

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
    public $SLBGracefulDrainSupported;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $SLBGracefulDrainSupport;
    protected $_name = [
        'queryState' => 'QueryState',
        'version' => 'Version',
        'SLBGracefulDrainSupported' => 'SLBGracefulDrainSupported',
        'clusterId' => 'ClusterId',
        'message' => 'Message',
        'SLBGracefulDrainSupport' => 'SLBGracefulDrainSupport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryState) {
            $res['QueryState'] = $this->queryState;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->SLBGracefulDrainSupported) {
            $res['SLBGracefulDrainSupported'] = $this->SLBGracefulDrainSupported;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->SLBGracefulDrainSupport) {
            $res['SLBGracefulDrainSupport'] = $this->SLBGracefulDrainSupport;
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
        if (isset($map['QueryState'])) {
            $model->queryState = $map['QueryState'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['SLBGracefulDrainSupported'])) {
            $model->SLBGracefulDrainSupported = $map['SLBGracefulDrainSupported'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['SLBGracefulDrainSupport'])) {
            $model->SLBGracefulDrainSupport = $map['SLBGracefulDrainSupport'];
        }

        return $model;
    }
}
