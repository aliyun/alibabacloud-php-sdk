<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var bool
     */
    public $asynchronous;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $platformVersion;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceCommitId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var bool
     */
    public $templated;
    protected $_name = [
        'appName'         => 'AppName',
        'appType'         => 'AppType',
        'asynchronous'    => 'Asynchronous',
        'categoryId'      => 'CategoryId',
        'clientToken'     => 'ClientToken',
        'description'     => 'Description',
        'icon'            => 'Icon',
        'platformVersion' => 'PlatformVersion',
        'schemaVersion'   => 'SchemaVersion',
        'source'          => 'Source',
        'sourceCommitId'  => 'SourceCommitId',
        'templateId'      => 'TemplateId',
        'templated'       => 'Templated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->asynchronous) {
            $res['Asynchronous'] = $this->asynchronous;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->platformVersion) {
            $res['PlatformVersion'] = $this->platformVersion;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceCommitId) {
            $res['SourceCommitId'] = $this->sourceCommitId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templated) {
            $res['Templated'] = $this->templated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['Asynchronous'])) {
            $model->asynchronous = $map['Asynchronous'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['PlatformVersion'])) {
            $model->platformVersion = $map['PlatformVersion'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceCommitId'])) {
            $model->sourceCommitId = $map['SourceCommitId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Templated'])) {
            $model->templated = $map['Templated'];
        }

        return $model;
    }
}
