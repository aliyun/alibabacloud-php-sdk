<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models;

use AlibabaCloud\Tea\Model;

class CreateSourcingProjectShrinkRequest extends Model
{
    /**
     * @example {"provinceCode":"530000","cityCode":"530600","districtCode":"530624","detail":"蒙姑镇XXX"}
     *
     * @var string
     */
    public $addressShrink;

    /**
     * @example XXXIDXXX
     *
     * @var string
     */
    public $bizId;

    /**
     * @example XXXNOXXX
     *
     * @var string
     */
    public $bizNo;

    /**
     * @example notice
     *
     * @var string
     */
    public $bizType;

    /**
     * @example {"name":"XXX公司","uscc":"12150123XX10486121"}
     *
     * @var string
     */
    public $companyShrink;

    /**
     * @example {"name":"XXX","phone":"1XXXXXXXXXX","email":"XX@XX.XX"}
     *
     * @var string
     */
    public $contactShrink;

    /**
     * @example 2023-11-08T00:01:59Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2023-12-08T00:01:59Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example {"depositAmount":29990.00,"desc":"其他说明事项XXX"}
     *
     * @var string
     */
    public $extendInfoShrink;

    /**
     * @example https://XXX.XXX.com/XXX
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * @example bidding_notice_enquire
     *
     * @var string
     */
    public $subBizType;

    /**
     * @example {"code":"标的编码XXX","name":"标的名称XXX","spec":"规格型号XXX","quantity":"88.00","unit":"单位XX","attachments":[{"fileName":"fileName","url":"https://XXX.XXX-XX-XXX.aliyuncs.com/XXX/XX/XXX.XXX"}],"address":"{\"provinceCode\":\"530000\",\"cityCode\":\"530600\",\"districtCode\":\"530624\",\"detail\":\"蒙姑镇XXX\"}","extendInfo":"{\"deliveryTime\":\"2023-11-16T00:01:59Z\",\"deliveryDesc\":\"交货期我方计划为准XXX\",\"desc\":\"XXX标准XXX要求\",\"brand\":\"XXX品牌\"}"}
     *
     * @var string
     */
    public $subjectsShrink;

    /**
     * @example XX标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'addressShrink'    => 'Address',
        'bizId'            => 'BizId',
        'bizNo'            => 'BizNo',
        'bizType'          => 'BizType',
        'companyShrink'    => 'Company',
        'contactShrink'    => 'Contact',
        'createTime'       => 'CreateTime',
        'expireTime'       => 'ExpireTime',
        'extendInfoShrink' => 'ExtendInfo',
        'sourceUrl'        => 'SourceUrl',
        'subBizType'       => 'SubBizType',
        'subjectsShrink'   => 'Subjects',
        'title'            => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressShrink) {
            $res['Address'] = $this->addressShrink;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizNo) {
            $res['BizNo'] = $this->bizNo;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->companyShrink) {
            $res['Company'] = $this->companyShrink;
        }
        if (null !== $this->contactShrink) {
            $res['Contact'] = $this->contactShrink;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->extendInfoShrink) {
            $res['ExtendInfo'] = $this->extendInfoShrink;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->subBizType) {
            $res['SubBizType'] = $this->subBizType;
        }
        if (null !== $this->subjectsShrink) {
            $res['Subjects'] = $this->subjectsShrink;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSourcingProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->addressShrink = $map['Address'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizNo'])) {
            $model->bizNo = $map['BizNo'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Company'])) {
            $model->companyShrink = $map['Company'];
        }
        if (isset($map['Contact'])) {
            $model->contactShrink = $map['Contact'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfoShrink = $map['ExtendInfo'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['SubBizType'])) {
            $model->subBizType = $map['SubBizType'];
        }
        if (isset($map['Subjects'])) {
            $model->subjectsShrink = $map['Subjects'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
