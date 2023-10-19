<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponseBody\signatureInfos;

use AlibabaCloud\Tea\Model;

class signatureInfo extends Model
{
    /**
     * @description The creation time of the key.
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The last modification time of the key.
     *
     * @example 2016-07-24T08:28:48Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The region where the key is located.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the backend signature key.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description The Key value of the backend signature key.
     *
     * @example qwertyuiop
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @description The name of the backend signature key.
     *
     * @example backendsignature
     *
     * @var string
     */
    public $signatureName;

    /**
     * @description The Secret value of the backend signature key.
     *
     * @example asdfghjkl
     *
     * @var string
     */
    public $signatureSecret;
    protected $_name = [
        'createdTime'     => 'CreatedTime',
        'modifiedTime'    => 'ModifiedTime',
        'regionId'        => 'RegionId',
        'signatureId'     => 'SignatureId',
        'signatureKey'    => 'SignatureKey',
        'signatureName'   => 'SignatureName',
        'signatureSecret' => 'SignatureSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }
        if (null !== $this->signatureSecret) {
            $res['SignatureSecret'] = $this->signatureSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signatureInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }
        if (isset($map['SignatureSecret'])) {
            $model->signatureSecret = $map['SignatureSecret'];
        }

        return $model;
    }
}
