<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class CreateEdgeMachineRequest extends Model
{
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var string
     */
    public $model;
    /**
     * @var string
     */
    public $sn;
    protected $_name = [
        'hostname' => 'hostname',
        'model'    => 'model',
        'sn'       => 'sn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
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
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }

        return $model;
    }
}
