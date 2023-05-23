<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListMessageMetricsRequest extends Model
{
    /**
     * @description 结束日期，格式20220102。
     *
     * @example 20210321
     *
     * @var string
     */
    public $endDate;

    /**
     * @description 关联人群Id。
     *
     * @example 10ed87f5-3ca8-4a43-9d83-b30519be7241
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 关联触达计划Id。
     *
     * @example 08d19262-bd76-48fd-80e8-6a225ac388c1
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description 签名名称。
     *
     * @example PAI通知
     *
     * @var string
     */
    public $signature;

    /**
     * @description 签名Id，同时只能指定签名名称或签名Id其中之一。
     *
     * @example b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 开始日期，格式20220102。
     *
     * @example 20210321
     *
     * @var string
     */
    public $startDate;

    /**
     * @description 模板号。
     *
     * @example SMS_123456
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板Id，同时只能指定模板Code或模板Id其中之一。
     *
     * @example 5480e3e7-f578-42d2-8ce8-217dec75f2e6
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 模板类型。
     * - 2 : 推广短信。
     * @example 2
     *
     * @var int
     */
    public $templateType;
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
        'templateType' => 'TemplateType',
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
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
