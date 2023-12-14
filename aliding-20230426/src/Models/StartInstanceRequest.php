<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class StartInstanceRequest extends Model
{
    /**
     * @example APP_PBxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example 18295
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example {}
     *
     * @var string
     */
    public $formDataJson;

    /**
     * @example FORM-EF6Yxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example TPROC--EF6Y4xxx
     *
     * @var string
     */
    public $processCode;

    /**
     * @example hexxyy
     *
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
        'systemToken'  => 'SystemToken',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceRequest
     */
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
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
