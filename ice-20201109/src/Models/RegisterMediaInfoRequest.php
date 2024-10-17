<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaInfoRequest extends Model
{
    /**
     * @description The business type of the media asset. Valid values:
     *
     *   subtitles
     *   watermark
     *   opening
     *   ending
     *   general
     *
     * @example opening
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The category ID.
     *
     * @example 3048
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. The value must be a UUID that contains 32 characters.
     *
     * @example ****0311a423d11a5f7dee713535****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The thumbnail URL of the media asset.
     *
     *   The value can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The description of the media asset.
     *
     *   The value can be up to 1,024 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example defaultDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the media asset in another service. The URL is associated with the ID of the media asset in IMS. The URL cannot be modified once registered. The following types of URLs are supported:
     *
     *   OSS URL in one of the following formats:
     *
     * oss://example-bucket/example.mp4: In this format, it is considered by default that the region of the OSS bucket in which the media asset resides is the same as the region in which IMS is activated.
     *
     *   URL of an ApsaraVideo VOD media asset
     *
     * vod://\\*\\*\\*20b48fb04483915d4f2cd8ac\\*\\*\\*\\*
     *
     * This parameter is required.
     * @var string
     */
    public $inputURL;

    /**
     * @description The tags of the media asset.
     *
     *   Up to 16 tags are supported.
     *   Separate multiple tags with commas (,).
     *   Each tag can be up to 32 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @description The type of the media asset. Valid values:
     *
     *   image
     *   video
     *   audio
     *   text
     *
     * <props="china">, see [File formats](https://help.aliyun.com/document_detail/466207.html).
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description Specifies whether to overwrite the media asset that has been registered by using the same URL. Default value: false. Valid values:
     *
     * \\- false: If a media asset has been registered by using the same URL, the new media asset is not registered. A URL cannot be used to register multiple media assets.
     * @example true
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description The custom ID. The ID can be 6 to 64 characters in length and can contain only letters, digits, hyphens (-), and underscores (_). Make sure that the ID is unique among users.
     *
     * @example 123-123
     *
     * @var string
     */
    public $referenceId;

    /**
     * @description The registration configurations.
     *
     * By default, a snapshot is generated for the media asset. You can set NeedSnapshot to false to disable automatic snapshot generation.
     * @example {
     * }
     * @var string
     */
    public $registerConfig;

    /**
     * @description The ID of the smart tagging template. Valid values:
     *
     *   S00000101-300080: the system template that supports natural language processing (NLP) for content recognition.
     *   S00000103-000001: the system template that supports NLP for content recognition and all tagging capabilities.
     *   S00000103-000002: the system template that supports all tagging capabilities but does not support NLP for content recognition.
     *
     * After you configure this parameter, a smart tag analysis task is automatically initiated after the media asset is registered. For more information about the billable items<props="china">, see [Smart tagging](https://help.aliyun.com/zh/ims/media-ai-billing?spm=a2c4g.11186623.0.0.3147392dWwlSjL#p-k38-3rb-dug).
     * @example S00000101-300080
     *
     * @var string
     */
    public $smartTagTemplateId;

    /**
     * @description The title. If you do not specify this parameter, a default title is automatically generated based on the date.
     *
     *   The value can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example defaultTitle
     *
     * @var string
     */
    public $title;

    /**
     * @description The user data. You can specify a custom callback URL. For more information<props="china"> ,see [Configure a callback upon editing completion](https://help.aliyun.com/document_detail/451631.html).
     *
     *   The value can be up to 1,024 bytes in length.
     *   The value must be encoded in UTF-8.
     *   The value must be in the JSON format.
     *
     * @var string
     */
    public $userData;

    /**
     * @description The workflow ID.
     *
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
