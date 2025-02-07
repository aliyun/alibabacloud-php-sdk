<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListDiagnosisRequest extends Model
{
    /**
     * @var int
     */
    public $current;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $params;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'current'     => 'current',
        'pageSize'    => 'pageSize',
        'params'      => 'params',
        'serviceName' => 'service_name',
        'status'      => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->serviceName) {
            $res['service_name'] = $this->serviceName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['service_name'])) {
            $model->serviceName = $map['service_name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
