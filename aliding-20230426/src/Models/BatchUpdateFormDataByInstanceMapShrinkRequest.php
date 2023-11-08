<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class BatchUpdateFormDataByInstanceMapShrinkRequest extends Model
{
    /**
     * @example String
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
     * @example FORM-GX866MC1NC1VOFF6WVQW33FD16E23L3CPMKVKA
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example false
     *
     * @var bool
     */
    public $ignoreEmpty;

    /**
     * @example false
     *
     * @var bool
     */
    public $noExecuteExpression;

    /**
     * @example 09866181UTZVVD4R3DC955FNKIM52HVPU5WWK7
     *
     * @var string
     */
    public $systemToken;

    /**
     * @var string
     */
    public $updateFormDataJsonMapShrink;

    /**
     * @example false
     *
     * @var bool
     */
    public $useLatestFormSchemaVersion;
    protected $_name = [
        'appType'                     => 'AppType',
        'asynchronousExecution'       => 'AsynchronousExecution',
        'formUuid'                    => 'FormUuid',
        'ignoreEmpty'                 => 'IgnoreEmpty',
        'noExecuteExpression'         => 'NoExecuteExpression',
        'systemToken'                 => 'SystemToken',
        'updateFormDataJsonMapShrink' => 'UpdateFormDataJsonMap',
        'useLatestFormSchemaVersion'  => 'UseLatestFormSchemaVersion',
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
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->ignoreEmpty) {
            $res['IgnoreEmpty'] = $this->ignoreEmpty;
        }
        if (null !== $this->noExecuteExpression) {
            $res['NoExecuteExpression'] = $this->noExecuteExpression;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }
        if (null !== $this->updateFormDataJsonMapShrink) {
            $res['UpdateFormDataJsonMap'] = $this->updateFormDataJsonMapShrink;
        }
        if (null !== $this->useLatestFormSchemaVersion) {
            $res['UseLatestFormSchemaVersion'] = $this->useLatestFormSchemaVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateFormDataByInstanceMapShrinkRequest
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
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['IgnoreEmpty'])) {
            $model->ignoreEmpty = $map['IgnoreEmpty'];
        }
        if (isset($map['NoExecuteExpression'])) {
            $model->noExecuteExpression = $map['NoExecuteExpression'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }
        if (isset($map['UpdateFormDataJsonMap'])) {
            $model->updateFormDataJsonMapShrink = $map['UpdateFormDataJsonMap'];
        }
        if (isset($map['UseLatestFormSchemaVersion'])) {
            $model->useLatestFormSchemaVersion = $map['UseLatestFormSchemaVersion'];
        }

        return $model;
    }
}
