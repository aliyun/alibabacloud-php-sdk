<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagListPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description 前端调用的api名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $apiName;

    /**
     * @description code
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $code;

    /**
     * @description API文档链接
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $docAddress;

    /**
     * @description 标签 id
     *
     * @example 75
     *
     * @var int
     */
    public $id;

    /**
     * @description 行业id
     *
     * @example 2
     *
     * @var int
     */
    public $industryId;

    /**
     * @description 行业名称
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $industryName;

    /**
     * @description 标签介绍
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $introduction;

    /**
     * @description 是否已经申请开通
     *
     * @example 45
     *
     * @var int
     */
    public $isOpen;

    /**
     * @description 标签名称
     *
     * @example 示例值
     *
     * @var string
     */
    public $name;

    /**
     * @description 0 隐藏 1 公开
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $saleStatusStr;

    /**
     * @description 场景id
     *
     * @example 13
     *
     * @var int
     */
    public $sceneId;

    /**
     * @description 场景名称
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'apiName'       => 'ApiName',
        'code'          => 'Code',
        'docAddress'    => 'DocAddress',
        'id'            => 'Id',
        'industryId'    => 'IndustryId',
        'industryName'  => 'IndustryName',
        'introduction'  => 'Introduction',
        'isOpen'        => 'IsOpen',
        'name'          => 'Name',
        'saleStatusStr' => 'SaleStatusStr',
        'sceneId'       => 'SceneId',
        'sceneName'     => 'SceneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->docAddress) {
            $res['DocAddress'] = $this->docAddress;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }
        if (null !== $this->industryName) {
            $res['IndustryName'] = $this->industryName;
        }
        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }
        if (null !== $this->isOpen) {
            $res['IsOpen'] = $this->isOpen;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->saleStatusStr) {
            $res['SaleStatusStr'] = $this->saleStatusStr;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DocAddress'])) {
            $model->docAddress = $map['DocAddress'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }
        if (isset($map['IndustryName'])) {
            $model->industryName = $map['IndustryName'];
        }
        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }
        if (isset($map['IsOpen'])) {
            $model->isOpen = $map['IsOpen'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SaleStatusStr'])) {
            $model->saleStatusStr = $map['SaleStatusStr'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
