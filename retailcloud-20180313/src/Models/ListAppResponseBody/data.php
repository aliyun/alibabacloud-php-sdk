<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppResponseBody\data\middleWareList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appStateType;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $bizTitle;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $language;

    /**
     * @var middleWareList[]
     */
    public $middleWareList;

    /**
     * @var string
     */
    public $operatingSystem;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'appId'           => 'AppId',
        'appStateType'    => 'AppStateType',
        'bizName'         => 'BizName',
        'bizTitle'        => 'BizTitle',
        'deployType'      => 'DeployType',
        'description'     => 'Description',
        'language'        => 'Language',
        'middleWareList'  => 'MiddleWareList',
        'operatingSystem' => 'OperatingSystem',
        'serviceType'     => 'ServiceType',
        'title'           => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appStateType) {
            $res['AppStateType'] = $this->appStateType;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizTitle) {
            $res['BizTitle'] = $this->bizTitle;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->middleWareList) {
            $res['MiddleWareList'] = [];
            if (null !== $this->middleWareList && \is_array($this->middleWareList)) {
                $n = 0;
                foreach ($this->middleWareList as $item) {
                    $res['MiddleWareList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operatingSystem) {
            $res['OperatingSystem'] = $this->operatingSystem;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppStateType'])) {
            $model->appStateType = $map['AppStateType'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['BizTitle'])) {
            $model->bizTitle = $map['BizTitle'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MiddleWareList'])) {
            if (!empty($map['MiddleWareList'])) {
                $model->middleWareList = [];
                $n                     = 0;
                foreach ($map['MiddleWareList'] as $item) {
                    $model->middleWareList[$n++] = null !== $item ? middleWareList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperatingSystem'])) {
            $model->operatingSystem = $map['OperatingSystem'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
