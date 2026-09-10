<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataCheckTaskRequest extends Model
{
    /**
     * @var string
     */
    public $checkTemplateId;

    /**
     * @var string
     */
    public $dstDsId;

    /**
     * @var string
     */
    public $dstDsName;

    /**
     * @var string
     */
    public $dstDsType;

    /**
     * @var string
     */
    public $dstEngineId;

    /**
     * @var string
     */
    public $dstEngineName;

    /**
     * @var string
     */
    public $dstEngineType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $srcDsId;

    /**
     * @var string
     */
    public $srcDsName;

    /**
     * @var string
     */
    public $srcDsType;

    /**
     * @var string
     */
    public $srcEngineId;

    /**
     * @var string
     */
    public $srcEngineName;

    /**
     * @var string
     */
    public $srcEngineType;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'checkTemplateId' => 'checkTemplateId',
        'dstDsId' => 'dstDsId',
        'dstDsName' => 'dstDsName',
        'dstDsType' => 'dstDsType',
        'dstEngineId' => 'dstEngineId',
        'dstEngineName' => 'dstEngineName',
        'dstEngineType' => 'dstEngineType',
        'id' => 'id',
        'srcDsId' => 'srcDsId',
        'srcDsName' => 'srcDsName',
        'srcDsType' => 'srcDsType',
        'srcEngineId' => 'srcEngineId',
        'srcEngineName' => 'srcEngineName',
        'srcEngineType' => 'srcEngineType',
        'taskDescription' => 'taskDescription',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkTemplateId) {
            $res['checkTemplateId'] = $this->checkTemplateId;
        }

        if (null !== $this->dstDsId) {
            $res['dstDsId'] = $this->dstDsId;
        }

        if (null !== $this->dstDsName) {
            $res['dstDsName'] = $this->dstDsName;
        }

        if (null !== $this->dstDsType) {
            $res['dstDsType'] = $this->dstDsType;
        }

        if (null !== $this->dstEngineId) {
            $res['dstEngineId'] = $this->dstEngineId;
        }

        if (null !== $this->dstEngineName) {
            $res['dstEngineName'] = $this->dstEngineName;
        }

        if (null !== $this->dstEngineType) {
            $res['dstEngineType'] = $this->dstEngineType;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->srcDsId) {
            $res['srcDsId'] = $this->srcDsId;
        }

        if (null !== $this->srcDsName) {
            $res['srcDsName'] = $this->srcDsName;
        }

        if (null !== $this->srcDsType) {
            $res['srcDsType'] = $this->srcDsType;
        }

        if (null !== $this->srcEngineId) {
            $res['srcEngineId'] = $this->srcEngineId;
        }

        if (null !== $this->srcEngineName) {
            $res['srcEngineName'] = $this->srcEngineName;
        }

        if (null !== $this->srcEngineType) {
            $res['srcEngineType'] = $this->srcEngineType;
        }

        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['checkTemplateId'])) {
            $model->checkTemplateId = $map['checkTemplateId'];
        }

        if (isset($map['dstDsId'])) {
            $model->dstDsId = $map['dstDsId'];
        }

        if (isset($map['dstDsName'])) {
            $model->dstDsName = $map['dstDsName'];
        }

        if (isset($map['dstDsType'])) {
            $model->dstDsType = $map['dstDsType'];
        }

        if (isset($map['dstEngineId'])) {
            $model->dstEngineId = $map['dstEngineId'];
        }

        if (isset($map['dstEngineName'])) {
            $model->dstEngineName = $map['dstEngineName'];
        }

        if (isset($map['dstEngineType'])) {
            $model->dstEngineType = $map['dstEngineType'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['srcDsId'])) {
            $model->srcDsId = $map['srcDsId'];
        }

        if (isset($map['srcDsName'])) {
            $model->srcDsName = $map['srcDsName'];
        }

        if (isset($map['srcDsType'])) {
            $model->srcDsType = $map['srcDsType'];
        }

        if (isset($map['srcEngineId'])) {
            $model->srcEngineId = $map['srcEngineId'];
        }

        if (isset($map['srcEngineName'])) {
            $model->srcEngineName = $map['srcEngineName'];
        }

        if (isset($map['srcEngineType'])) {
            $model->srcEngineType = $map['srcEngineType'];
        }

        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
