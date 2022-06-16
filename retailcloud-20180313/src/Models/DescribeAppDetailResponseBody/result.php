<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppDetailResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppDetailResponseBody\result\middleWareInfoList;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppDetailResponseBody\result\userRoles;
use AlibabaCloud\Tea\Model;

class result extends Model
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
     * @var middleWareInfoList[]
     */
    public $middleWareInfoList;

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

    /**
     * @var userRoles[]
     */
    public $userRoles;
    protected $_name = [
        'appId'              => 'AppId',
        'appStateType'       => 'AppStateType',
        'bizName'            => 'BizName',
        'bizTitle'           => 'BizTitle',
        'deployType'         => 'DeployType',
        'description'        => 'Description',
        'language'           => 'Language',
        'middleWareInfoList' => 'MiddleWareInfoList',
        'operatingSystem'    => 'OperatingSystem',
        'serviceType'        => 'ServiceType',
        'title'              => 'Title',
        'userRoles'          => 'UserRoles',
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
        if (null !== $this->middleWareInfoList) {
            $res['MiddleWareInfoList'] = [];
            if (null !== $this->middleWareInfoList && \is_array($this->middleWareInfoList)) {
                $n = 0;
                foreach ($this->middleWareInfoList as $item) {
                    $res['MiddleWareInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->userRoles) {
            $res['UserRoles'] = [];
            if (null !== $this->userRoles && \is_array($this->userRoles)) {
                $n = 0;
                foreach ($this->userRoles as $item) {
                    $res['UserRoles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['MiddleWareInfoList'])) {
            if (!empty($map['MiddleWareInfoList'])) {
                $model->middleWareInfoList = [];
                $n                         = 0;
                foreach ($map['MiddleWareInfoList'] as $item) {
                    $model->middleWareInfoList[$n++] = null !== $item ? middleWareInfoList::fromMap($item) : $item;
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
        if (isset($map['UserRoles'])) {
            if (!empty($map['UserRoles'])) {
                $model->userRoles = [];
                $n                = 0;
                foreach ($map['UserRoles'] as $item) {
                    $model->userRoles[$n++] = null !== $item ? userRoles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
