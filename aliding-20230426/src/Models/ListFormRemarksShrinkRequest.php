<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListFormRemarksShrinkRequest extends Model
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
     * @var string
     */
    public $formInstanceIdListShrink;

    /**
     * @example FORM-xxxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'                  => 'AppType',
        'formInstanceIdListShrink' => 'FormInstanceIdList',
        'formUuid'                 => 'FormUuid',
        'systemToken'              => 'SystemToken',
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
        if (null !== $this->formInstanceIdListShrink) {
            $res['FormInstanceIdList'] = $this->formInstanceIdListShrink;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFormRemarksShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['FormInstanceIdList'])) {
            $model->formInstanceIdListShrink = $map['FormInstanceIdList'];
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
