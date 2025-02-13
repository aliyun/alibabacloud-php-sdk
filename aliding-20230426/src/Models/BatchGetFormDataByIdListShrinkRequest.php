<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class BatchGetFormDataByIdListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $formInstanceIdListShrink;
    /**
     * @var string
     */
    public $formUuid;
    /**
     * @var bool
     */
    public $needFormInstanceValue;
    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'                  => 'AppType',
        'formInstanceIdListShrink' => 'FormInstanceIdList',
        'formUuid'                 => 'FormUuid',
        'needFormInstanceValue'    => 'NeedFormInstanceValue',
        'systemToken'              => 'SystemToken',
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

        if (null !== $this->formInstanceIdListShrink) {
            $res['FormInstanceIdList'] = $this->formInstanceIdListShrink;
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

        if (isset($map['FormInstanceIdList'])) {
            $model->formInstanceIdListShrink = $map['FormInstanceIdList'];
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
