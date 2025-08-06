<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $applicationSourceType;

    /**
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $ssoType;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'applicationSourceType' => 'ApplicationSourceType',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'logoUrl' => 'LogoUrl',
        'ssoType' => 'SsoType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->applicationSourceType) {
            $res['ApplicationSourceType'] = $this->applicationSourceType;
        }

        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }

        if (null !== $this->ssoType) {
            $res['SsoType'] = $this->ssoType;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ApplicationSourceType'])) {
            $model->applicationSourceType = $map['ApplicationSourceType'];
        }

        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        if (isset($map['SsoType'])) {
            $model->ssoType = $map['SsoType'];
        }

        return $model;
    }
}
