<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateTicketRequest extends Model
{
    /**
     * @description The user\\"s account name.
     *
     * - If the user is an Alibaba Cloud primary account **wangwu**, the format is **[Primary Account]**, for example, **wangwu**.
     *
     * - If the user is a RAM account **zhangsan**@aliyun.cn**, the format is **[Primary Account: Sub-Account]**, for example, **wangwu:zhangsan**.
     *
     * > Only one of UserId and AccountName needs to be filled in. If neither is filled in, it will default to binding the report\\"s Owner, and the report will be accessed with that user\\"s identity. If you need to configure row-level permissions, please refer to [Row-Level Permissions](https://help.aliyun.com/document_detail/322783.html).
     *
     * @example test
     *
     * @deprecated
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The type of the user\\"s account.
     * - 1: Alibaba Cloud account
     * - 3: Quick BI self-built account
     * - 4: DingTalk
     * - 5: RAM sub-account
     * - 9: WeCom
     * - 10: Feishu
     * > If AccountName is not empty, then AccountType must also not be empty.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $accountType;

    /**
     * @description Component ID. This is the ID of a component within the above-mentioned dashboard; other types of works do not support this.
     * Refer to [QueryWorksBloodRelationship](https://next.api.aliyun.com/api/quickbi-public/2022-01-01/QueryWorksBloodRelationship?spm=a2c4g.11186623.0.0.15615d7aWVvWAl&params={}&lang=JAVA&tab=DOC&sdkStyle=old) for the API to get the component ID.
     *
     * @example 0fc6a275c7f64f17b1****a306ce0f31
     *
     * @var string
     */
    public $cmptId;

    /**
     * @description Expiration time
     * - Unit: minutes
     * - Default: 240
     *
     * @example 200
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description Global parameters for the report filter conditions.
     * - A string in JsonArray format.
     *
     * > If you need to use global parameter capabilities, please contact the [Quick BI Operations Manager](https://h5-alimebot.dingtalk.com/intl/index.htm?spm=a2c4g.11186623.0.0.3da14f6chrDv9e&sourceType=ding_talk&from=DEFFB9G5KBByQkwq23wneFIOmaJ).
     *
     * @example [{"paramKey":"price","joinType":"and","conditionList":[{"operate":">","value":"0"}]}]
     *
     * @var string
     */
    public $globalParam;

    /**
     * @description The number of tickets. Each time a ticket is used, the number of tickets decreases by 1.
     * - Default value: 1
     * - Recommended value: 1
     * - Maximum value: 99999
     *
     * @example 1
     *
     * @var int
     */
    public $ticketNum;

    /**
     * @description Quick BI\\"s UserId, which is not your Alibaba Cloud account ID.
     * You can call the [QueryUserInfoByAccount](https://next.api.aliyun.com/api/quickbi-public/2022-01-01/QueryUserInfoByAccount?spm=a2c4g.11186623.0.0.15615d7aWVvWAl&params={}&tab=DOC&sdkStyle=old) interface to obtain the UserId. An example of a UserId is fe67f61a35a94b7da1a34ba174a7****.
     *
     * > Only one of UserId and AccountName needs to be filled in. If neither is filled in, it will default to binding the report\\"s Owner, and the report will be accessed with that user\\"s identity. If you need to configure row-level permissions, please refer to [Row-Level Permissions](https://help.aliyun.com/document_detail/322783.html).
     *
     * @example 46e537466****92704c8
     *
     * @var string
     */
    public $userId;

    /**
     * @description Watermark parameters for the report.
     * - Must not exceed 50 characters.
     * - When the report type is a large screen, watermark parameter passing is not supported.
     *
     * @example test
     *
     * @var string
     */
    public $watermarkParam;

    /**
     * @description The ID of the report to be embedded. Currently supports dashboards, spreadsheets, data screens, self-service data retrieval, ad-hoc analysis, and data entry.
     *
     * This parameter is required.
     *
     * @example a206f5f3-****-e9b17c835b03
     *
     * @var string
     */
    public $worksId;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountType' => 'AccountType',
        'cmptId' => 'CmptId',
        'expireTime' => 'ExpireTime',
        'globalParam' => 'GlobalParam',
        'ticketNum' => 'TicketNum',
        'userId' => 'UserId',
        'watermarkParam' => 'WatermarkParam',
        'worksId' => 'WorksId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->cmptId) {
            $res['CmptId'] = $this->cmptId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->globalParam) {
            $res['GlobalParam'] = $this->globalParam;
        }
        if (null !== $this->ticketNum) {
            $res['TicketNum'] = $this->ticketNum;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->watermarkParam) {
            $res['WatermarkParam'] = $this->watermarkParam;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['CmptId'])) {
            $model->cmptId = $map['CmptId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GlobalParam'])) {
            $model->globalParam = $map['GlobalParam'];
        }
        if (isset($map['TicketNum'])) {
            $model->ticketNum = $map['TicketNum'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WatermarkParam'])) {
            $model->watermarkParam = $map['WatermarkParam'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}
