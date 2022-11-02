<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest\redirect;
use AlibabaCloud\Tea\Model;

class ModifyDomainRequest extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var listen
     */
    public $listen;

    /**
     * @var redirect
     */
    public $redirect;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessType' => 'AccessType',
        'domain'     => 'Domain',
        'instanceId' => 'InstanceId',
        'listen'     => 'Listen',
        'redirect'   => 'Redirect',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->listen) {
            $res['Listen'] = null !== $this->listen ? $this->listen->toMap() : null;
        }
        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Listen'])) {
            $model->listen = listen::fromMap($map['Listen']);
        }
        if (isset($map['Redirect'])) {
            $model->redirect = redirect::fromMap($map['Redirect']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
