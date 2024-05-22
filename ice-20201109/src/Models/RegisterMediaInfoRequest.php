<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaInfoRequest extends Model
{
    /**
     * @example opening
     *
     * @var string
     */
    public $businessType;

    /**
     * @example 3048
     *
     * @var int
     */
    public $cateId;

    /**
     * @example ****0311a423d11a5f7dee713535****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @example defaultDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $inputURL;

    /**
     * @example tag1,tag2
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @example 123-123
     *
     * @var string
     */
    public $referenceId;

    /**
     * @var string
     */
    public $registerConfig;

    /**
     * @var string
     */
    public $smartTagTemplateId;

    /**
     * @example defaultTitle
     *
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userData;

    /**
     * @example ******b4fb044839815d4f2cd8******
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'businessType'       => 'BusinessType',
        'cateId'             => 'CateId',
        'clientToken'        => 'ClientToken',
        'coverURL'           => 'CoverURL',
        'description'        => 'Description',
        'inputURL'           => 'InputURL',
        'mediaTags'          => 'MediaTags',
        'mediaType'          => 'MediaType',
        'overwrite'          => 'Overwrite',
        'referenceId'        => 'ReferenceId',
        'registerConfig'     => 'RegisterConfig',
        'smartTagTemplateId' => 'SmartTagTemplateId',
        'title'              => 'Title',
        'userData'           => 'UserData',
        'workflowId'         => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }
        if (null !== $this->mediaTags) {
            $res['MediaTags'] = $this->mediaTags;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }
        if (null !== $this->registerConfig) {
            $res['RegisterConfig'] = $this->registerConfig;
        }
        if (null !== $this->smartTagTemplateId) {
            $res['SmartTagTemplateId'] = $this->smartTagTemplateId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }
        if (isset($map['MediaTags'])) {
            $model->mediaTags = $map['MediaTags'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }
        if (isset($map['RegisterConfig'])) {
            $model->registerConfig = $map['RegisterConfig'];
        }
        if (isset($map['SmartTagTemplateId'])) {
            $model->smartTagTemplateId = $map['SmartTagTemplateId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
