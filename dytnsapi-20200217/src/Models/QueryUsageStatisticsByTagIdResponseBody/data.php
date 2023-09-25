<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryUsageStatisticsByTagIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 授权码
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $authorizationCode;

    /**
     * @description 查询失败号码数
     *
     * @example 71
     *
     * @var int
     */
    public $failTotal;

    /**
     * @description 创建时间
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $gmtDateStr;

    /**
     * @description 授权码使用记录 id
     *
     * @example 17
     *
     * @var int
     */
    public $id;

    /**
     * @description 行业名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $industryName;

    /**
     * @description 客户 pid
     *
     * @example 89
     *
     * @var int
     */
    public $partnerId;

    /**
     * @description 场景名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description 查询成功号码数
     *
     * @example 93
     *
     * @var int
     */
    public $successTotal;

    /**
     * @description 标签名称
     *
     * @example 69
     *
     * @var int
     */
    public $tagId;

    /**
     * @description 标签名称
     *
     * @example 示例值
     *
     * @var string
     */
    public $tagName;

    /**
     * @description 查询总号码数
     *
     * @example 41
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'authorizationCode' => 'AuthorizationCode',
        'failTotal'         => 'FailTotal',
        'gmtDateStr'        => 'GmtDateStr',
        'id'                => 'Id',
        'industryName'      => 'IndustryName',
        'partnerId'         => 'PartnerId',
        'sceneName'         => 'SceneName',
        'successTotal'      => 'SuccessTotal',
        'tagId'             => 'TagId',
        'tagName'           => 'TagName',
        'total'             => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationCode) {
            $res['AuthorizationCode'] = $this->authorizationCode;
        }
        if (null !== $this->failTotal) {
            $res['FailTotal'] = $this->failTotal;
        }
        if (null !== $this->gmtDateStr) {
            $res['GmtDateStr'] = $this->gmtDateStr;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->industryName) {
            $res['IndustryName'] = $this->industryName;
        }
        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->successTotal) {
            $res['SuccessTotal'] = $this->successTotal;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationCode'])) {
            $model->authorizationCode = $map['AuthorizationCode'];
        }
        if (isset($map['FailTotal'])) {
            $model->failTotal = $map['FailTotal'];
        }
        if (isset($map['GmtDateStr'])) {
            $model->gmtDateStr = $map['GmtDateStr'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IndustryName'])) {
            $model->industryName = $map['IndustryName'];
        }
        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['SuccessTotal'])) {
            $model->successTotal = $map['SuccessTotal'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
