<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $checkTypeExport;

    /**
     * @var int
     */
    public $checkTypeName;

    /**
     * @var string
     */
    public $dsTypes;

    /**
     * @var string
     */
    public $engineTypes;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $isBuiltin;

    /**
     * @var bool
     */
    public $isUsedByTask;

    /**
     * @var string
     */
    public $templateDesc;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'checkType' => 'checkType',
        'checkTypeExport' => 'checkTypeExport',
        'checkTypeName' => 'checkTypeName',
        'dsTypes' => 'dsTypes',
        'engineTypes' => 'engineTypes',
        'gmtModified' => 'gmtModified',
        'isBuiltin' => 'isBuiltin',
        'isUsedByTask' => 'isUsedByTask',
        'templateDesc' => 'templateDesc',
        'templateId' => 'templateId',
        'templateName' => 'templateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['checkType'] = $this->checkType;
        }

        if (null !== $this->checkTypeExport) {
            $res['checkTypeExport'] = $this->checkTypeExport;
        }

        if (null !== $this->checkTypeName) {
            $res['checkTypeName'] = $this->checkTypeName;
        }

        if (null !== $this->dsTypes) {
            $res['dsTypes'] = $this->dsTypes;
        }

        if (null !== $this->engineTypes) {
            $res['engineTypes'] = $this->engineTypes;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->isBuiltin) {
            $res['isBuiltin'] = $this->isBuiltin;
        }

        if (null !== $this->isUsedByTask) {
            $res['isUsedByTask'] = $this->isUsedByTask;
        }

        if (null !== $this->templateDesc) {
            $res['templateDesc'] = $this->templateDesc;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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
        if (isset($map['checkType'])) {
            $model->checkType = $map['checkType'];
        }

        if (isset($map['checkTypeExport'])) {
            $model->checkTypeExport = $map['checkTypeExport'];
        }

        if (isset($map['checkTypeName'])) {
            $model->checkTypeName = $map['checkTypeName'];
        }

        if (isset($map['dsTypes'])) {
            $model->dsTypes = $map['dsTypes'];
        }

        if (isset($map['engineTypes'])) {
            $model->engineTypes = $map['engineTypes'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['isBuiltin'])) {
            $model->isBuiltin = $map['isBuiltin'];
        }

        if (isset($map['isUsedByTask'])) {
            $model->isUsedByTask = $map['isUsedByTask'];
        }

        if (isset($map['templateDesc'])) {
            $model->templateDesc = $map['templateDesc'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
