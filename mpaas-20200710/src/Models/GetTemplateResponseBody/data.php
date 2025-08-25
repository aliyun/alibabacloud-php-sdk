<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\GetTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $descInfo;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $iconUrls;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageUrls;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pushStyle;

    /**
     * @var string
     */
    public $showStyle;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $variables;
    protected $_name = [
        'action' => 'Action',
        'content' => 'Content',
        'descInfo' => 'DescInfo',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'iconUrls' => 'IconUrls',
        'id' => 'Id',
        'imageUrls' => 'ImageUrls',
        'name' => 'Name',
        'pushStyle' => 'PushStyle',
        'showStyle' => 'ShowStyle',
        'title' => 'Title',
        'uri' => 'Uri',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->descInfo) {
            $res['DescInfo'] = $this->descInfo;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->iconUrls) {
            $res['IconUrls'] = $this->iconUrls;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pushStyle) {
            $res['PushStyle'] = $this->pushStyle;
        }

        if (null !== $this->showStyle) {
            $res['ShowStyle'] = $this->showStyle;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        if (null !== $this->variables) {
            $res['Variables'] = $this->variables;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DescInfo'])) {
            $model->descInfo = $map['DescInfo'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IconUrls'])) {
            $model->iconUrls = $map['IconUrls'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImageUrls'])) {
            $model->imageUrls = $map['ImageUrls'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PushStyle'])) {
            $model->pushStyle = $map['PushStyle'];
        }

        if (isset($map['ShowStyle'])) {
            $model->showStyle = $map['ShowStyle'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        if (isset($map['Variables'])) {
            $model->variables = $map['Variables'];
        }

        return $model;
    }
}
