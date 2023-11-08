<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class BatchGetFormDataByIdListRequest extends Model
{
    /**
     * @example APP_PBKT0xxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example FORM-xxxxx
     *
     * @var string[]
     */
    public $formInstanceIdList;

    /**
     * @example FORM-xxxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example true
     *
     * @var bool
     */
    public $needFormInstanceValue;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'               => 'AppType',
        'formInstanceIdList'    => 'FormInstanceIdList',
        'formUuid'              => 'FormUuid',
        'needFormInstanceValue' => 'NeedFormInstanceValue',
        'systemToken'           => 'SystemToken',
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
        if (null !== $this->formInstanceIdList) {
            $res['FormInstanceIdList'] = $this->formInstanceIdList;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->needFormInstanceValue) {
            $res['NeedFormInstanceValue'] = $this->needFormInstanceValue;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetFormDataByIdListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['FormInstanceIdList'])) {
            if (!empty($map['FormInstanceIdList'])) {
                $model->formInstanceIdList = $map['FormInstanceIdList'];
            }
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['NeedFormInstanceValue'])) {
            $model->needFormInstanceValue = $map['NeedFormInstanceValue'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
