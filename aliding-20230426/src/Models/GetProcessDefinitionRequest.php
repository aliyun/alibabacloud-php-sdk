<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetProcessDefinitionRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var string
     */
    public $orderNumber;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $systemToken;

    /**
     * @var string
     */
    public $systemType;
    protected $_name = [
        'appType' => 'AppType',
        'corpId' => 'CorpId',
        'groupId' => 'GroupId',
        'language' => 'Language',
        'nameSpace' => 'NameSpace',
        'orderNumber' => 'OrderNumber',
        'processInstanceId' => 'ProcessInstanceId',
        'systemToken' => 'SystemToken',
        'systemType' => 'SystemType',
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

        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }

        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
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

        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }

        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
        }

        return $model;
    }
}
