<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class BatchRemovalByFormInstanceIdListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appType;
    /**
     * @var bool
     */
    public $asynchronousExecution;
    /**
     * @var bool
     */
    public $executeExpression;
    /**
     * @var string
     */
    public $formInstanceIdListShrink;
    /**
     * @var string
     */
    public $formUuid;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
