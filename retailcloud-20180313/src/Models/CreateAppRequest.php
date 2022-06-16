<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppRequest\userRoles;
use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $bizTitle;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int[]
     */
    public $middleWareIdList;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $operatingSystem;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var int
     */
    public $stateType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var userRoles[]
     */
    public $userRoles;
    protected $_name = [
        'bizCode'          => 'BizCode',
        'bizTitle'         => 'BizTitle',
        'description'      => 'Description',
        'groupName'        => 'GroupName',
        'language'         => 'Language',
        'middleWareIdList' => 'MiddleWareIdList',
        'namespace'        => 'Namespace',
        'operatingSystem'  => 'OperatingSystem',
        'serviceType'      => 'ServiceType',
        'stateType'        => 'StateType',
        'title'            => 'Title',
        'userRoles'        => 'UserRoles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->bizTitle) {
            $res['BizTitle'] = $this->bizTitle;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->middleWareIdList) {
            $res['MiddleWareIdList'] = $this->middleWareIdList;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->operatingSystem) {
            $res['OperatingSystem'] = $this->operatingSystem;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->stateType) {
            $res['StateType'] = $this->stateType;
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
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['BizTitle'])) {
            $model->bizTitle = $map['BizTitle'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MiddleWareIdList'])) {
            if (!empty($map['MiddleWareIdList'])) {
                $model->middleWareIdList = $map['MiddleWareIdList'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OperatingSystem'])) {
            $model->operatingSystem = $map['OperatingSystem'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['StateType'])) {
            $model->stateType = $map['StateType'];
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
