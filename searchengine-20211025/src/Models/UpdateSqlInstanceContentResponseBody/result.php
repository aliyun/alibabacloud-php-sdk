<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\UpdateSqlInstanceContentResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {\\"trace\\":\\"INFO\\",\\"databaseName\\":\\"general\\",\\"iquan.plan.cache.enable\\":true,\\"iquan.plan.prepare.level\\":\\"jni.post.optimize\\",\\"urlencode_data\\":false,\\"formatType\\":\\"string\\",\\"timeout\\":1000}
     *
     * @var string
     */
    public $combineParams;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example select * from test
     *
     * @var string
     */
    public $content;

    /**
     * @example {\\"trace\\":\\"INFO\\",\\"databaseName\\":\\"general\\",\\"iquan.plan.cache.enable\\":true,\\"iquan.plan.prepare.level\\":\\"jni.post.optimize\\",\\"urlencode_data\\":false,\\"formatType\\":\\"string\\",\\"timeout\\":1000}
     *
     * @var string
     */
    public $dynamicParams;

    /**
     * @example 1719221186114
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1719221186114
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example {\\"trace\\":\\"INFO\\",\\"databaseName\\":\\"general\\",\\"iquan.plan.cache.enable\\":true,\\"iquan.plan.prepare.level\\":\\"jni.post.optimize\\",\\"urlencode_data\\":false,\\"formatType\\":\\"string\\",\\"timeout\\":1000}
     *
     * @var string
     */
    public $kvpairs;

    /**
     * @example 1
     *
     * @var int
     */
    public $relatedTemplateId;

    /**
     * @example {\\"trace\\":\\"INFO\\",\\"databaseName\\":\\"general\\",\\"iquan.plan.cache.enable\\":true,\\"iquan.plan.prepare.level\\":\\"jni.post.optimize\\",\\"urlencode_data\\":false,\\"formatType\\":\\"string\\",\\"timeout\\":1000}
     *
     * @var string
     */
    public $staticParams;

    /**
     * @example {\\"trace\\":\\"INFO\\",\\"databaseName\\":\\"general\\",\\"iquan.plan.cache.enable\\":true,\\"iquan.plan.prepare.level\\":\\"jni.post.optimize\\",\\"urlencode_data\\":false,\\"formatType\\":\\"string\\",\\"timeout\\":1000}
     *
     * @var string
     */
    public $templateParams;

    /**
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'combineParams'     => 'combineParams',
        'comment'           => 'comment',
        'content'           => 'content',
        'dynamicParams'     => 'dynamicParams',
        'gmtCreate'         => 'gmtCreate',
        'gmtModified'       => 'gmtModified',
        'instanceId'        => 'instanceId',
        'kvpairs'           => 'kvpairs',
        'relatedTemplateId' => 'relatedTemplateId',
        'staticParams'      => 'staticParams',
        'templateParams'    => 'templateParams',
        'version'           => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
