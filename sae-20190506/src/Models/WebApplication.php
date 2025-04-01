<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebApplication extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $internetURL;

    /**
     * @var string
     */
    public $intranetURL;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var RevisionConfig
     */
    public $revisionConfig;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var WebScalingConfig
     */
    public $webScalingConfig;

    /**
     * @var WebTrafficConfig
     */
    public $webTrafficConfig;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'internetURL' => 'InternetURL',
        'intranetURL' => 'IntranetURL',
        'lastModifiedTime' => 'LastModifiedTime',
        'namespaceId' => 'NamespaceId',
        'revisionConfig' => 'RevisionConfig',
        'vpcId' => 'VpcId',
        'webScalingConfig' => 'WebScalingConfig',
        'webTrafficConfig' => 'WebTrafficConfig',
    ];

    public function validate()
    {
        if (null !== $this->revisionConfig) {
            $this->revisionConfig->validate();
        }
        if (null !== $this->webScalingConfig) {
            $this->webScalingConfig->validate();
        }
        if (null !== $this->webTrafficConfig) {
            $this->webTrafficConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->internetURL) {
            $res['InternetURL'] = $this->internetURL;
        }

        if (null !== $this->intranetURL) {
            $res['IntranetURL'] = $this->intranetURL;
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->revisionConfig) {
            $res['RevisionConfig'] = null !== $this->revisionConfig ? $this->revisionConfig->toArray($noStream) : $this->revisionConfig;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->webScalingConfig) {
            $res['WebScalingConfig'] = null !== $this->webScalingConfig ? $this->webScalingConfig->toArray($noStream) : $this->webScalingConfig;
        }

        if (null !== $this->webTrafficConfig) {
            $res['WebTrafficConfig'] = null !== $this->webTrafficConfig ? $this->webTrafficConfig->toArray($noStream) : $this->webTrafficConfig;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InternetURL'])) {
            $model->internetURL = $map['InternetURL'];
        }

        if (isset($map['IntranetURL'])) {
            $model->intranetURL = $map['IntranetURL'];
        }

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['RevisionConfig'])) {
            $model->revisionConfig = RevisionConfig::fromMap($map['RevisionConfig']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WebScalingConfig'])) {
            $model->webScalingConfig = WebScalingConfig::fromMap($map['WebScalingConfig']);
        }

        if (isset($map['WebTrafficConfig'])) {
            $model->webTrafficConfig = WebTrafficConfig::fromMap($map['WebTrafficConfig']);
        }

        return $model;
    }
}
