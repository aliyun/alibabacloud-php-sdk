<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UploadFormInfo extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string[]
     */
    public $formData;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $ossAccessKeyId;

    /**
     * @var string
     */
    public $ossEndPoint;

    /**
     * @var string
     */
    public $ossSecurityToken;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'bucketName'       => 'bucket_name',
        'endpoint'         => 'endpoint',
        'formData'         => 'form_data',
        'objectKey'        => 'object_key',
        'ossAccessKeyId'   => 'oss_access_key_id',
        'ossEndPoint'      => 'oss_end_point',
        'ossSecurityToken' => 'oss_security_token',
        'policy'           => 'policy',
        'signature'        => 'signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucket_name'] = $this->bucketName;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->formData) {
            $res['form_data'] = $this->formData;
        }
        if (null !== $this->objectKey) {
            $res['object_key'] = $this->objectKey;
        }
        if (null !== $this->ossAccessKeyId) {
            $res['oss_access_key_id'] = $this->ossAccessKeyId;
        }
        if (null !== $this->ossEndPoint) {
            $res['oss_end_point'] = $this->ossEndPoint;
        }
        if (null !== $this->ossSecurityToken) {
            $res['oss_security_token'] = $this->ossSecurityToken;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFormInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucket_name'])) {
            $model->bucketName = $map['bucket_name'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['form_data'])) {
            $model->formData = $map['form_data'];
        }
        if (isset($map['object_key'])) {
            $model->objectKey = $map['object_key'];
        }
        if (isset($map['oss_access_key_id'])) {
            $model->ossAccessKeyId = $map['oss_access_key_id'];
        }
        if (isset($map['oss_end_point'])) {
            $model->ossEndPoint = $map['oss_end_point'];
        }
        if (isset($map['oss_security_token'])) {
            $model->ossSecurityToken = $map['oss_security_token'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        return $model;
    }
}
