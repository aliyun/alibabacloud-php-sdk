<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitVideoTranslationJobRequest extends Model
{
    /**
     * @description *   The client token.
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description *   The job description.
     *
     * @var string
     */
    public $description;

    /**
     * @description *   The configuration parameters of the video translation job.
     *   The value must be in the JSON format.
     *
     * @example {"SourceLanguage":"zh","TargetLanguage":"en","DetextArea":"Auto"}
     *
     * @var string
     */
    public $editingConfig;

    /**
     * @description *   The input parameters of the video translation job.
     *   A video translation job takes a video or subtitle file as the input.
     *   The value must be in the JSON format.
     *
     * @example {"Type":"Video","Media":"https://your-bucket.oss-cn-shanghai.aliyuncs.com/xxx.mp4"}
     *
     * @var string
     */
    public $inputConfig;

    /**
     * @description *   The output parameters of the video translation job.
     *   A video translation job can generate a video or subtitle file as the output.
     *
     * @example {"MediaURL": "https://your-bucket.oss-cn-shanghai.aliyuncs.com/your-object.mp4"}
     *
     * @var string
     */
    public $outputConfig;

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

    /**
     * @description *   The job title.
     *
     * @var string
     */
    public $title;

    /**
     * @description *   The user-defined data.
     *   The data must be in the JSON format, and can be up to 512 characters in length.
     *
     * @example {"NotifyAddress":"http://xx.xx.xxx"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'description'      => 'Description',
        'editingConfig'    => 'EditingConfig',
        'inputConfig'      => 'InputConfig',
        'outputConfig'     => 'OutputConfig',
        'signature'        => 'Signature',
        'signatureMehtod'  => 'SignatureMehtod',
        'signatureNonce'   => 'SignatureNonce',
        'signatureType'    => 'SignatureType',
        'signatureVersion' => 'SignatureVersion',
        'title'            => 'Title',
        'userData'         => 'UserData',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->editingConfig) {
            $res['EditingConfig'] = $this->editingConfig;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitVideoTranslationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EditingConfig'])) {
            $model->editingConfig = $map['EditingConfig'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
