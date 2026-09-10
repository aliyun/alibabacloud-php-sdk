<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class AddDataCheckTaskRequest extends Model
{
    /**
     * @var string
     */
    public $checkTemplateId;

    /**
     * @var int
     */
    public $checkType;

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
     * @var int
     */
    public $taskMode;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'checkTemplateId' => 'checkTemplateId',
        'checkType' => 'checkType',
        'dstDsId' => 'dstDsId',
        'dstDsName' => 'dstDsName',
        'dstDsType' => 'dstDsType',
        'srcDsId' => 'srcDsId',
        'srcDsName' => 'srcDsName',
        'srcDsType' => 'srcDsType',
        'taskMode' => 'taskMode',
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

        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
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

        if (null !== $this->srcDsId) {
            $res['srcDsId'] = $this->srcDsId;
        }

        if (null !== $this->srcDsName) {
            $res['srcDsName'] = $this->srcDsName;
        }

        if (null !== $this->srcDsType) {
            $res['srcDsType'] = $this->srcDsType;
        }

        if (null !== $this->taskMode) {
            $res['taskMode'] = $this->taskMode;
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

        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
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

        if (isset($map['srcDsId'])) {
            $model->srcDsId = $map['srcDsId'];
        }

        if (isset($map['srcDsName'])) {
            $model->srcDsName = $map['srcDsName'];
        }

        if (isset($map['srcDsType'])) {
            $model->srcDsType = $map['srcDsType'];
        }

        if (isset($map['taskMode'])) {
            $model->taskMode = $map['taskMode'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
