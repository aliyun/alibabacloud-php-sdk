<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListMessageMetricsRequest extends Model
{
    /**
     * @description 结束日期，格式20220102。
     *
     * @var string
     */
    public $endDate;

    /**
     * @description 关联人群Id。
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 关联发送计划Id。
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description 签名名称。
     *
     * @var string
     */
    public $signature;

    /**
     * @description 签名Id，同时只能指定签名名称或签名Id其中之一。
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 开始日期，格式20220102。
     *
     * @var string
     */
    public $startDate;

    /**
     * @description 模板号。
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板Id，同时只能指定模板Code或模板Id其中之一。
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'endDate'      => 'EndDate',
        'groupId'      => 'GroupId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'scheduleId'   => 'ScheduleId',
        'signature'    => 'Signature',
        'signatureId'  => 'SignatureId',
        'startDate'    => 'StartDate',
        'templateCode' => 'TemplateCode',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessageMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
