<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models;

use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest\address;
use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest\company;
use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest\contact;
use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest\subjects;
use AlibabaCloud\Tea\Model;

class CreateSourcingProjectRequest extends Model
{
    /**
     * @example {"provinceCode":"530000","cityCode":"530600","districtCode":"530624","detail":"蒙姑镇XXX"}
     *
     * @var address
     */
    public $address;

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
     * @var company
     */
    public $company;

    /**
     * @example {"name":"XXX","phone":"1XXXXXXXXXX","email":"XX@XX.XX"}
     *
     * @var contact
     */
    public $contact;

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
     * @var string[]
     */
    public $extendInfo;

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
     * @var subjects[]
     */
    public $subjects;

    /**
     * @example XX标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'address'    => 'Address',
        'bizId'      => 'BizId',
        'bizNo'      => 'BizNo',
        'bizType'    => 'BizType',
        'company'    => 'Company',
        'contact'    => 'Contact',
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'extendInfo' => 'ExtendInfo',
        'sourceUrl'  => 'SourceUrl',
        'subBizType' => 'SubBizType',
        'subjects'   => 'Subjects',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
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
        if (null !== $this->company) {
            $res['Company'] = null !== $this->company ? $this->company->toMap() : null;
        }
        if (null !== $this->contact) {
            $res['Contact'] = null !== $this->contact ? $this->contact->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->subBizType) {
            $res['SubBizType'] = $this->subBizType;
        }
        if (null !== $this->subjects) {
            $res['Subjects'] = [];
            if (null !== $this->subjects && \is_array($this->subjects)) {
                $n = 0;
                foreach ($this->subjects as $item) {
                    $res['Subjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSourcingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = address::fromMap($map['Address']);
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
            $model->company = company::fromMap($map['Company']);
        }
        if (isset($map['Contact'])) {
            $model->contact = contact::fromMap($map['Contact']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['SubBizType'])) {
            $model->subBizType = $map['SubBizType'];
        }
        if (isset($map['Subjects'])) {
            if (!empty($map['Subjects'])) {
                $model->subjects = [];
                $n               = 0;
                foreach ($map['Subjects'] as $item) {
                    $model->subjects[$n++] = null !== $item ? subjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
