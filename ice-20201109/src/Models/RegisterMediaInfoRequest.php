<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

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
    public $registerConfig;

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
        'businessType'   => 'BusinessType',
        'cateId'         => 'CateId',
        'clientToken'    => 'ClientToken',
        'coverURL'       => 'CoverURL',
        'description'    => 'Description',
        'inputURL'       => 'InputURL',
        'mediaTags'      => 'MediaTags',
        'mediaType'      => 'MediaType',
        'overwrite'      => 'Overwrite',
        'registerConfig' => 'RegisterConfig',
        'title'          => 'Title',
        'userData'       => 'UserData',
        'workflowId'     => 'WorkflowId',
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
        if (null !== $this->registerConfig) {
            $res['RegisterConfig'] = $this->registerConfig;
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
        if (isset($map['RegisterConfig'])) {
            $model->registerConfig = $map['RegisterConfig'];
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
