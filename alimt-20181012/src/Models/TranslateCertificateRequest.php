<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class TranslateCertificateRequest extends Model
{
    /**
     * @example driving_license
     *
     * @var string
     */
    public $certificateType;

    /**
     * @example http://imageurl
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example text
     *
     * @var string
     */
    public $resultType;

    /**
     * @example zh
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @example en
     *
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'certificateType' => 'CertificateType',
        'imageUrl'        => 'ImageUrl',
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
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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
     * @return TranslateCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
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
