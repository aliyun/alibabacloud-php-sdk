<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest\redirect;

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
        if (null !== $this->listen) {
            $this->listen->validate();
        }
        if (null !== $this->redirect) {
            $this->redirect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Listen'] = null !== $this->listen ? $this->listen->toArray($noStream) : $this->listen;
        }

        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toArray($noStream) : $this->redirect;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
