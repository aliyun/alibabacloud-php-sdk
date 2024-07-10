<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebApplication extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description This parameter is required.
     *
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
        'applicationId'    => 'ApplicationId',
        'applicationName'  => 'ApplicationName',
        'createdTime'      => 'CreatedTime',
        'description'      => 'Description',
        'internetURL'      => 'InternetURL',
        'intranetURL'      => 'IntranetURL',
        'lastModifiedTime' => 'LastModifiedTime',
        'namespaceId'      => 'NamespaceId',
        'revisionConfig'   => 'RevisionConfig',
        'vpcId'            => 'VpcId',
        'webScalingConfig' => 'WebScalingConfig',
        'webTrafficConfig' => 'WebTrafficConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['RevisionConfig'] = null !== $this->revisionConfig ? $this->revisionConfig->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->webScalingConfig) {
            $res['WebScalingConfig'] = null !== $this->webScalingConfig ? $this->webScalingConfig->toMap() : null;
        }
        if (null !== $this->webTrafficConfig) {
            $res['WebTrafficConfig'] = null !== $this->webTrafficConfig ? $this->webTrafficConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebApplication
     */
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
