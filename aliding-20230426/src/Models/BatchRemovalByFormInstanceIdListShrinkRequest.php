<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class BatchRemovalByFormInstanceIdListShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example APP_XCE0EVXS6DYG3YDYC5RD
     *
     * @var string
     */
    public $appType;

    /**
     * @example false
     *
     * @var bool
     */
    public $asynchronousExecution;

    /**
     * @example false
     *
     * @var bool
     */
    public $executeExpression;

    /**
     * @description This parameter is required.
     *
     * @example []
     *
     * @var string
     */
    public $formInstanceIdListShrink;

    /**
     * @description This parameter is required.
     *
     * @example FORM-GX866MC1NC1VOFF6WVQW33FD16E23L3CPMKVKA
     *
     * @var string
     */
    public $formUuid;

    /**
     * @description This parameter is required.
     *
     * @example 09866181UTZVVD4R3DC955FNKIM52HVPU5WWK7
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'                  => 'AppType',
        'asynchronousExecution'    => 'AsynchronousExecution',
        'executeExpression'        => 'ExecuteExpression',
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
        if (null !== $this->asynchronousExecution) {
            $res['AsynchronousExecution'] = $this->asynchronousExecution;
        }
        if (null !== $this->executeExpression) {
            $res['ExecuteExpression'] = $this->executeExpression;
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
     * @return BatchRemovalByFormInstanceIdListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['AsynchronousExecution'])) {
            $model->asynchronousExecution = $map['AsynchronousExecution'];
        }
        if (isset($map['ExecuteExpression'])) {
            $model->executeExpression = $map['ExecuteExpression'];
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
