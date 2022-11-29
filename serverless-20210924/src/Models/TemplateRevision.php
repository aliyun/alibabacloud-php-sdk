<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class TemplateRevision extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var TemplateSpec
     */
    public $spec;

    /**
     * @var TemplateStatus
     */
    public $status;

    /**
     * @var int
     */
    public $templateGeneration;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'createdTime'        => 'createdTime',
        'kind'               => 'kind',
        'spec'               => 'spec',
        'status'             => 'status',
        'templateGeneration' => 'templateGeneration',
        'templateName'       => 'templateName',
        'templateVersion'    => 'templateVersion',
        'uid'                => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->templateGeneration) {
            $res['templateGeneration'] = $this->templateGeneration;
        }
        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TemplateRevision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['spec'])) {
            $model->spec = TemplateSpec::fromMap($map['spec']);
        }
        if (isset($map['status'])) {
            $model->status = TemplateStatus::fromMap($map['status']);
        }
        if (isset($map['templateGeneration'])) {
            $model->templateGeneration = $map['templateGeneration'];
        }
        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }
        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
