<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class UpdateRemediationRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotency of the request. You can use the client to generate the value, but you must ensure that the value is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 2014295338-e7361358-5822-4276-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The execution mode of the remediation. Valid values:
     *
     *   NON_EXECUTION: The remediation is not executed.
     *   AUTO_EXECUTION: The remediation is automatically executed.
     *   MANUAL_EXECUTION: The remediation is manually executed.
     *   NOT_CONFIG: The execution mode is not specified.
     *
     * @example AUTO_EXECUTION
     *
     * @var string
     */
    public $invokeType;

    /**
     * @description The desired parameter values of the remediation setting.
     *
     * @example {"properties":[{"name":"regionId","type":"STRING","value":"{regionId}","allowedValues":[]},{"name":"bucketName","type":"STRING","value":"{resourceId}","allowedValues":[],"description":"OSS Bucket Name."},{"name":"permissionName","type":"STRING","value":"private","allowedValues":["public-read-write","public-read","private"],"description":"ACL Permission Name."}]}
     *
     * @var string
     */
    public $params;

    /**
     * @description The ID of the remediation setting.
     *
     * This parameter is required.
     * @example crr-909ba2d4716700eb****
     *
     * @var string
     */
    public $remediationId;

    /**
     * @description The ID of the remediation template.
     *
     * You can call the [ListRemediationTemplates](https://help.aliyun.com/document_detail/270066.html) operation to obtain the ID of the remediation template.
     * @example ACS-OSS-PutBucketAcl
     *
     * @var string
     */
    public $remediationTemplateId;

    /**
     * @description The type of the remediation template. Valid values:
     *
     *   OOS: Operation Orchestration Service (OOS)
     *   FC: Function Compute. You can use Function Compute to configure custom remediation settings.
     *
     * @example OOS
     *
     * @var string
     */
    public $remediationType;

    /**
     * @description The source of the remediation setting. Valid values:
     *
     *   ALIYUN: the default remediation setting of Alibaba Cloud.
     *   CUSTOM: a custom remediation setting.
     *   NONE: The source is not specified.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'invokeType'            => 'InvokeType',
        'params'                => 'Params',
        'remediationId'         => 'RemediationId',
        'remediationTemplateId' => 'RemediationTemplateId',
        'remediationType'       => 'RemediationType',
        'sourceType'            => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }
        if (null !== $this->remediationTemplateId) {
            $res['RemediationTemplateId'] = $this->remediationTemplateId;
        }
        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRemediationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }
        if (isset($map['RemediationTemplateId'])) {
            $model->remediationTemplateId = $map['RemediationTemplateId'];
        }
        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
