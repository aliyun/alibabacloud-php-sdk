<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class StartInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $departmentId;
    /**
     * @var string
     */
    public $formDataJson;
    /**
     * @var string
     */
    public $formUuid;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $processCode;
    /**
     * @var string
     */
    public $processData;
    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'      => 'AppType',
        'departmentId' => 'DepartmentId',
        'formDataJson' => 'FormDataJson',
        'formUuid'     => 'FormUuid',
        'language'     => 'Language',
        'processCode'  => 'ProcessCode',
        'processData'  => 'ProcessData',
        'systemToken'  => 'SystemToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        if (null !== $this->formDataJson) {
            $res['FormDataJson'] = $this->formDataJson;
        }

        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->processCode) {
            $res['ProcessCode'] = $this->processCode;
        }

        if (null !== $this->processData) {
            $res['ProcessData'] = $this->processData;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }

        if (isset($map['FormDataJson'])) {
            $model->formDataJson = $map['FormDataJson'];
        }

        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ProcessCode'])) {
            $model->processCode = $map['ProcessCode'];
        }

        if (isset($map['ProcessData'])) {
            $model->processData = $map['ProcessData'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
