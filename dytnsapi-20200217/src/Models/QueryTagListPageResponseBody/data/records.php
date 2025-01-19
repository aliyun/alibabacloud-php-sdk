<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagListPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $apiName;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $docAddress;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $industryId;
    /**
     * @var string
     */
    public $industryName;
    /**
     * @var string
     */
    public $introduction;
    /**
     * @var int
     */
    public $isOpen;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $saleStatusStr;
    /**
     * @var int
     */
    public $sceneId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
