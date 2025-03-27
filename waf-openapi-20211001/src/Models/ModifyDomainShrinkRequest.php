<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyDomainShrinkRequest extends Model
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
     * @var string
     */
    public $listenShrink;

    /**
     * @var string
     */
    public $redirectShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessType' => 'AccessType',
        'domain' => 'Domain',
        'instanceId' => 'InstanceId',
        'listenShrink' => 'Listen',
        'redirectShrink' => 'Redirect',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
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

        if (null !== $this->listenShrink) {
            $res['Listen'] = $this->listenShrink;
        }

        if (null !== $this->redirectShrink) {
            $res['Redirect'] = $this->redirectShrink;
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
            $model->listenShrink = $map['Listen'];
        }

        if (isset($map['Redirect'])) {
            $model->redirectShrink = $map['Redirect'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
