<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainRequest\filing;

class CreateDomainRequest extends Model
{
    /**
     * @var string
     */
    public $domain;
    /**
     * @var filing
     */
    public $filing;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'domain'     => 'Domain',
        'filing'     => 'Filing',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (null !== $this->filing) {
            $this->filing->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->filing) {
            $res['Filing'] = null !== $this->filing ? $this->filing->toArray($noStream) : $this->filing;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Filing'])) {
            $model->filing = filing::fromMap($map['Filing']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
