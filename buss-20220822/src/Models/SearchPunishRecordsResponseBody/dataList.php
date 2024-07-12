<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $antiStatus;

    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var string
     */
    public $caseCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $punishStatus;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $tipsCode;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'actionCode'    => 'ActionCode',
        'antiStatus'    => 'AntiStatus',
        'bussinessCode' => 'BussinessCode',
        'caseCode'      => 'CaseCode',
        'createTime'    => 'CreateTime',
        'domain'        => 'Domain',
        'eventCode'     => 'EventCode',
        'ip'            => 'Ip',
        'punishStatus'  => 'PunishStatus',
        'reason'        => 'Reason',
        'resourceId'    => 'ResourceId',
        'tipsCode'      => 'TipsCode',
        'url'           => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }
        if (null !== $this->antiStatus) {
            $res['AntiStatus'] = $this->antiStatus;
        }
        if (null !== $this->bussinessCode) {
            $res['BussinessCode'] = $this->bussinessCode;
        }
        if (null !== $this->caseCode) {
            $res['CaseCode'] = $this->caseCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->punishStatus) {
            $res['PunishStatus'] = $this->punishStatus;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tipsCode) {
            $res['TipsCode'] = $this->tipsCode;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }
        if (isset($map['AntiStatus'])) {
            $model->antiStatus = $map['AntiStatus'];
        }
        if (isset($map['BussinessCode'])) {
            $model->bussinessCode = $map['BussinessCode'];
        }
        if (isset($map['CaseCode'])) {
            $model->caseCode = $map['CaseCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['PunishStatus'])) {
            $model->punishStatus = $map['PunishStatus'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TipsCode'])) {
            $model->tipsCode = $map['TipsCode'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
