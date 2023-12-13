<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagListPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The API operation that is called by the frontend.
     *
     * @example TwoElementsVerification
     *
     * @var string
     */
    public $apiName;

    /**
     * @description Code
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The URL for the API documentation.
     *
     * @example https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.388997.0.0.cf804cc7DX4vlP
     *
     * @var string
     */
    public $docAddress;

    /**
     * @description The tag ID.
     *
     * @example 75
     *
     * @var int
     */
    public $id;

    /**
     * @description The industry ID.
     *
     * @example 2
     *
     * @var int
     */
    public $industryId;

    /**
     * @description The industry name.
     *
     * @example Test
     *
     * @var string
     */
    public $industryName;

    /**
     * @description The tag description.
     *
     * @example for autotest new
     *
     * @var string
     */
    public $introduction;

    /**
     * @description Indicates whether the number is activated.
     *
     * @example 45
     *
     * @var int
     */
    public $isOpen;

    /**
     * @description The tag name.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $name;

    /**
     * @description *   0: The number is hidden.
     *   1: The number is public.
     *
     * @example 1
     *
     * @var string
     */
    public $saleStatusStr;

    /**
     * @description The scene ID.
     *
     * @example 13
     *
     * @var int
     */
    public $sceneId;

    /**
     * @description The scene name.
     *
     * @example check
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
