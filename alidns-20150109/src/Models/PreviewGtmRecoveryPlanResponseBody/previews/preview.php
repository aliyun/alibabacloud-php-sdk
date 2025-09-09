<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\preview\switchInfos;

class preview extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var switchInfos
     */
    public $switchInfos;

    /**
     * @var string
     */
    public $userDomainName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'switchInfos' => 'SwitchInfos',
        'userDomainName' => 'UserDomainName',
    ];

    public function validate()
    {
        if (null !== $this->switchInfos) {
            $this->switchInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->switchInfos) {
            $res['SwitchInfos'] = null !== $this->switchInfos ? $this->switchInfos->toArray($noStream) : $this->switchInfos;
        }

        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SwitchInfos'])) {
            $model->switchInfos = switchInfos::fromMap($map['SwitchInfos']);
        }

        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }

        return $model;
    }
}
