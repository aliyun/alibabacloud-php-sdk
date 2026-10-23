<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\DeleteWorkflowTemplateVersionResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $createdByUserId;

    /**
     * @var string
     */
    public $description;

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
    public $gmtSubmitted;

    /**
     * @var bool
     */
    public $isEffective;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $stepCount;

    /**
     * @var int
     */
    public $submittedByUserId;

    /**
     * @var int
     */
    public $updatedByUserId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'createdByUserId' => 'createdByUserId',
        'description' => 'description',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'gmtSubmitted' => 'gmtSubmitted',
        'isEffective' => 'isEffective',
        'name' => 'name',
        'sourceVersion' => 'sourceVersion',
        'status' => 'status',
        'stepCount' => 'stepCount',
        'submittedByUserId' => 'submittedByUserId',
        'updatedByUserId' => 'updatedByUserId',
        'version' => 'version',
        'versionDescription' => 'versionDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdByUserId) {
            $res['createdByUserId'] = $this->createdByUserId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gmtSubmitted) {
            $res['gmtSubmitted'] = $this->gmtSubmitted;
        }

        if (null !== $this->isEffective) {
            $res['isEffective'] = $this->isEffective;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sourceVersion) {
            $res['sourceVersion'] = $this->sourceVersion;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->stepCount) {
            $res['stepCount'] = $this->stepCount;
        }

        if (null !== $this->submittedByUserId) {
            $res['submittedByUserId'] = $this->submittedByUserId;
        }

        if (null !== $this->updatedByUserId) {
            $res['updatedByUserId'] = $this->updatedByUserId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionDescription) {
            $res['versionDescription'] = $this->versionDescription;
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
        if (isset($map['createdByUserId'])) {
            $model->createdByUserId = $map['createdByUserId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['gmtSubmitted'])) {
            $model->gmtSubmitted = $map['gmtSubmitted'];
        }

        if (isset($map['isEffective'])) {
            $model->isEffective = $map['isEffective'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sourceVersion'])) {
            $model->sourceVersion = $map['sourceVersion'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['stepCount'])) {
            $model->stepCount = $map['stepCount'];
        }

        if (isset($map['submittedByUserId'])) {
            $model->submittedByUserId = $map['submittedByUserId'];
        }

        if (isset($map['updatedByUserId'])) {
            $model->updatedByUserId = $map['updatedByUserId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionDescription'])) {
            $model->versionDescription = $map['versionDescription'];
        }

        return $model;
    }
}
