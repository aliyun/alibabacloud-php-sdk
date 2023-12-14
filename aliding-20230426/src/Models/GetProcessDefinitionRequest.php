<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetProcessDefinitionRequest extends Model
{
    /**
     * @example APP_PBxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example ding123
     *
     * @var string
     */
    public $corpId;

    /**
     * @example c-xxafafaf
     *
     * @var string
     */
    public $groupId;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $nameSpace;

    /**
     * @example o-YDJKIxxx
     *
     * @var string
     */
    public $orderNumber;

    /**
     * @example f30233fb-72e1-4af4-8cb8-c7e0ea9ee530
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @example hexxyy
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example hexabc1234
     *
     * @var string
     */
    public $systemType;
    protected $_name = [
        'appType'           => 'AppType',
        'corpId'            => 'CorpId',
        'groupId'           => 'GroupId',
        'language'          => 'Language',
        'nameSpace'         => 'NameSpace',
        'orderNumber'       => 'OrderNumber',
        'processInstanceId' => 'ProcessInstanceId',
        'systemToken'       => 'SystemToken',
        'systemType'        => 'SystemType',
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

    /**
     * @param array $map
     *
     * @return GetProcessDefinitionRequest
     */
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
