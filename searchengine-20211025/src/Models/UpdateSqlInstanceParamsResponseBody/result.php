<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateSqlInstanceParamsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $combineParams;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dynamicParams;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $kvpairs;

    /**
     * @var int
     */
    public $relatedTemplateId;

    /**
     * @var string
     */
    public $staticParams;

    /**
     * @var string
     */
    public $templateParams;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'combineParams' => 'combineParams',
        'comment' => 'comment',
        'content' => 'content',
        'dynamicParams' => 'dynamicParams',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'instanceId' => 'instanceId',
        'kvpairs' => 'kvpairs',
        'relatedTemplateId' => 'relatedTemplateId',
        'staticParams' => 'staticParams',
        'templateParams' => 'templateParams',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->combineParams) {
            $res['combineParams'] = $this->combineParams;
        }

        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->dynamicParams) {
            $res['dynamicParams'] = $this->dynamicParams;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->kvpairs) {
            $res['kvpairs'] = $this->kvpairs;
        }

        if (null !== $this->relatedTemplateId) {
            $res['relatedTemplateId'] = $this->relatedTemplateId;
        }

        if (null !== $this->staticParams) {
            $res['staticParams'] = $this->staticParams;
        }

        if (null !== $this->templateParams) {
            $res['templateParams'] = $this->templateParams;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['combineParams'])) {
            $model->combineParams = $map['combineParams'];
        }

        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['dynamicParams'])) {
            $model->dynamicParams = $map['dynamicParams'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['kvpairs'])) {
            $model->kvpairs = $map['kvpairs'];
        }

        if (isset($map['relatedTemplateId'])) {
            $model->relatedTemplateId = $map['relatedTemplateId'];
        }

        if (isset($map['staticParams'])) {
            $model->staticParams = $map['staticParams'];
        }

        if (isset($map['templateParams'])) {
            $model->templateParams = $map['templateParams'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
