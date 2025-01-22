<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;

class UpdatePublicTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $content;
    /**
     * @var int
     */
    public $popularity;
    /**
     * @var string
     */
    public $publisher;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $templateName;
    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'category'     => 'Category',
        'content'      => 'Content',
        'popularity'   => 'Popularity',
        'publisher'    => 'Publisher',
        'regionId'     => 'RegionId',
        'templateName' => 'TemplateName',
        'versionName'  => 'VersionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->popularity) {
            $res['Popularity'] = $this->popularity;
        }

        if (null !== $this->publisher) {
            $res['Publisher'] = $this->publisher;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Popularity'])) {
            $model->popularity = $map['Popularity'];
        }

        if (isset($map['Publisher'])) {
            $model->publisher = $map['Publisher'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
