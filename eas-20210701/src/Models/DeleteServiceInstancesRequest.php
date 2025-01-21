<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteServiceInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $container;
    /**
     * @var string
     */
    public $instanceList;
    /**
     * @var bool
     */
    public $softRestart;
    protected $_name = [
        'container'    => 'Container',
        'instanceList' => 'InstanceList',
        'softRestart'  => 'SoftRestart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }

        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }

        if (null !== $this->softRestart) {
            $res['SoftRestart'] = $this->softRestart;
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
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }

        if (isset($map['InstanceList'])) {
            $model->instanceList = $map['InstanceList'];
        }

        if (isset($map['SoftRestart'])) {
            $model->softRestart = $map['SoftRestart'];
        }

        return $model;
    }
}
