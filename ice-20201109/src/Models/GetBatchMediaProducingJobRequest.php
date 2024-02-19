<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetBatchMediaProducingJobRequest extends Model
{
    /**
     * @example ****b4549d46c88681030f6e****
     *
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $signatureMehtod;

    /**
     * @var string
     */
    public $signatureNonce;

    /**
     * @var string
     */
    public $signatureType;

    /**
     * @var string
     */
    public $signatureVersion;
    protected $_name = [
        'jobId'            => 'JobId',
        'signature'        => 'Signature',
        'signatureMehtod'  => 'SignatureMehtod',
        'signatureNonce'   => 'SignatureNonce',
        'signatureType'    => 'SignatureType',
        'signatureVersion' => 'SignatureVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->signatureMehtod) {
            $res['SignatureMehtod'] = $this->signatureMehtod;
        }
        if (null !== $this->signatureNonce) {
            $res['SignatureNonce'] = $this->signatureNonce;
        }
        if (null !== $this->signatureType) {
            $res['SignatureType'] = $this->signatureType;
        }
        if (null !== $this->signatureVersion) {
            $res['SignatureVersion'] = $this->signatureVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchMediaProducingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SignatureMehtod'])) {
            $model->signatureMehtod = $map['SignatureMehtod'];
        }
        if (isset($map['SignatureNonce'])) {
            $model->signatureNonce = $map['SignatureNonce'];
        }
        if (isset($map['SignatureType'])) {
            $model->signatureType = $map['SignatureType'];
        }
        if (isset($map['SignatureVersion'])) {
            $model->signatureVersion = $map['SignatureVersion'];
        }

        return $model;
    }
}
