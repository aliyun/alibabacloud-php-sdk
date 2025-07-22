<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class PushRpaTaskDetailRequest extends Model
{
    /**
     * @description aliyunKp
     *
     * @example 1
     *
     * @var string
     */
    public $aliyunKp;

    /**
     * @description apiType
     *
     * @example MPC
     *
     * @var string
     */
    public $apiType;

    /**
     * @description bid
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @description inputData
     *
     * @example http://wssq.sbj.cnipa.gov.cn:9080/tmsve/wssqsy_getCayzDl.xhtml
     *
     * @var string
     */
    public $inputData;

    /**
     * @description inputHtml
     *
     * @example 1
     *
     * @var string
     */
    public $inputHtml;

    /**
     * @description inputScreenshot
     *
     * @example 1
     *
     * @var string
     */
    public $inputScreenshot;

    /**
     * @description lang
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description modelDetailId
     *
     * @example 6
     *
     * @var int
     */
    public $modelDetailId;

    /**
     * @description originalRequest
     *
     * @example 1
     *
     * @var string
     */
    public $originalRequest;

    /**
     * @description outputData
     *
     * @var string
     */
    public $outputData;

    /**
     * @description outputHtml
     *
     * @example <div class=\\"photobox\\" id=\\"Layer3\\" style=\\"visibility: visible
     *
     * @var string
     */
    public $outputHtml;

    /**
     * @description outputScreenshot
     *
     * @example http://dbu-nap-p-test.oss-cn-beijing.aliyuncs.com/202301/20230110/5782089/1673334129101-d111874e-f181-4d1c-8edc-83e789975329.jpg?Expires=1675926129&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=------
     *
     * @var string
     */
    public $outputScreenshot;

    /**
     * @description status
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description taskDetailId
     *
     * @example 1
     *
     * @var int
     */
    public $taskDetailId;

    /**
     * @description taskId
     *
     * @example 5596654
     *
     * @var int
     */
    public $taskId;

    /**
     * @description userAccessKeyId
     *
     * @example 1
     *
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @description userBid
     *
     * @example 1
     *
     * @var string
     */
    public $userBid;

    /**
     * @description userCallerParentId
     *
     * @example 1
     *
     * @var int
     */
    public $userCallerParentId;

    /**
     * @description userCallerType
     *
     * @example 1
     *
     * @var string
     */
    public $userCallerType;

    /**
     * @description userClientIp
     *
     * @example 1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description userKp
     *
     * @example 1
     *
     * @var string
     */
    public $userKp;

    /**
     * @description userSecurityToken
     *
     * @example 1
     *
     * @var string
     */
    public $userSecurityToken;
    protected $_name = [
        'aliyunKp' => 'AliyunKp',
        'apiType' => 'ApiType',
        'bid' => 'Bid',
        'inputData' => 'InputData',
        'inputHtml' => 'InputHtml',
        'inputScreenshot' => 'InputScreenshot',
        'lang' => 'Lang',
        'modelDetailId' => 'ModelDetailId',
        'originalRequest' => 'OriginalRequest',
        'outputData' => 'OutputData',
        'outputHtml' => 'OutputHtml',
        'outputScreenshot' => 'OutputScreenshot',
        'status' => 'Status',
        'taskDetailId' => 'TaskDetailId',
        'taskId' => 'TaskId',
        'userAccessKeyId' => 'UserAccessKeyId',
        'userBid' => 'UserBid',
        'userCallerParentId' => 'UserCallerParentId',
        'userCallerType' => 'UserCallerType',
        'userClientIp' => 'UserClientIp',
        'userKp' => 'UserKp',
        'userSecurityToken' => 'UserSecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunKp) {
            $res['AliyunKp'] = $this->aliyunKp;
        }
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->inputData) {
            $res['InputData'] = $this->inputData;
        }
        if (null !== $this->inputHtml) {
            $res['InputHtml'] = $this->inputHtml;
        }
        if (null !== $this->inputScreenshot) {
            $res['InputScreenshot'] = $this->inputScreenshot;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->modelDetailId) {
            $res['ModelDetailId'] = $this->modelDetailId;
        }
        if (null !== $this->originalRequest) {
            $res['OriginalRequest'] = $this->originalRequest;
        }
        if (null !== $this->outputData) {
            $res['OutputData'] = $this->outputData;
        }
        if (null !== $this->outputHtml) {
            $res['OutputHtml'] = $this->outputHtml;
        }
        if (null !== $this->outputScreenshot) {
            $res['OutputScreenshot'] = $this->outputScreenshot;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskDetailId) {
            $res['TaskDetailId'] = $this->taskDetailId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
        }
        if (null !== $this->userBid) {
            $res['UserBid'] = $this->userBid;
        }
        if (null !== $this->userCallerParentId) {
            $res['UserCallerParentId'] = $this->userCallerParentId;
        }
        if (null !== $this->userCallerType) {
            $res['UserCallerType'] = $this->userCallerType;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->userKp) {
            $res['UserKp'] = $this->userKp;
        }
        if (null !== $this->userSecurityToken) {
            $res['UserSecurityToken'] = $this->userSecurityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushRpaTaskDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunKp'])) {
            $model->aliyunKp = $map['AliyunKp'];
        }
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['InputData'])) {
            $model->inputData = $map['InputData'];
        }
        if (isset($map['InputHtml'])) {
            $model->inputHtml = $map['InputHtml'];
        }
        if (isset($map['InputScreenshot'])) {
            $model->inputScreenshot = $map['InputScreenshot'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ModelDetailId'])) {
            $model->modelDetailId = $map['ModelDetailId'];
        }
        if (isset($map['OriginalRequest'])) {
            $model->originalRequest = $map['OriginalRequest'];
        }
        if (isset($map['OutputData'])) {
            $model->outputData = $map['OutputData'];
        }
        if (isset($map['OutputHtml'])) {
            $model->outputHtml = $map['OutputHtml'];
        }
        if (isset($map['OutputScreenshot'])) {
            $model->outputScreenshot = $map['OutputScreenshot'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskDetailId'])) {
            $model->taskDetailId = $map['TaskDetailId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }
        if (isset($map['UserBid'])) {
            $model->userBid = $map['UserBid'];
        }
        if (isset($map['UserCallerParentId'])) {
            $model->userCallerParentId = $map['UserCallerParentId'];
        }
        if (isset($map['UserCallerType'])) {
            $model->userCallerType = $map['UserCallerType'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['UserKp'])) {
            $model->userKp = $map['UserKp'];
        }
        if (isset($map['UserSecurityToken'])) {
            $model->userSecurityToken = $map['UserSecurityToken'];
        }

        return $model;
    }
}
