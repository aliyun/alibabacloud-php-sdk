<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class RegisterMediaInfoRequest extends Model
{
    /**
     * @var string
     */
    public $businessType;
    /**
     * @var int
     */
    public $cateId;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $coverURL;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $inputURL;
    /**
     * @var string
     */
    public $mediaTags;
    /**
     * @var string
     */
    public $mediaType;
    /**
     * @var bool
     */
    public $overwrite;
    /**
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
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $userData;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
