<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateDomainRequest\filing;
use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @description The domain name of the website.
     *
     * This parameter is required.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Registration information parameters.
     *
     * @var filing
     */
    public $filing;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'domain' => 'Domain',
        'filing' => 'Filing',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->filing) {
            $res['Filing'] = null !== $this->filing ? $this->filing->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainRequest
     */
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
