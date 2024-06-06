<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class TranslateCertificateAdvanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example driving_license
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description This parameter is required.
     *
     * @example http://imageurl
     *
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @example text
     *
     * @var string
     */
    public $resultType;

    /**
     * @description This parameter is required.
     *
     * @example zh
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @description This parameter is required.
     *
     * @example en
     *
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'certificateType' => 'CertificateType',
        'imageUrlObject'  => 'ImageUrl',
        'resultType'      => 'ResultType',
        'sourceLanguage'  => 'SourceLanguage',
        'targetLanguage'  => 'TargetLanguage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }
        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TranslateCertificateAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }
        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        return $model;
    }
}
