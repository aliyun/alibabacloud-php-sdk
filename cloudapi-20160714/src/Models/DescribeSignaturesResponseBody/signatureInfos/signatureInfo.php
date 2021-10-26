<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponseBody\signatureInfos;

use AlibabaCloud\Tea\Model;

class signatureInfo extends Model
{
    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $signatureId;

    /**
     * @var string
     */
    public $signatureSecret;

    /**
     * @var string
     */
    public $signatureName;

    /**
     * @var string
     */
    public $signatureKey;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'modifiedTime'    => 'ModifiedTime',
        'signatureId'     => 'SignatureId',
        'signatureSecret' => 'SignatureSecret',
        'signatureName'   => 'SignatureName',
        'signatureKey'    => 'SignatureKey',
        'createdTime'     => 'CreatedTime',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->signatureSecret) {
            $res['SignatureSecret'] = $this->signatureSecret;
        }
        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SignatureSecret'])) {
            $model->signatureSecret = $map['SignatureSecret'];
        }
        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
