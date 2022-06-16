<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateAppRequest\userRoles;
use AlibabaCloud\Tea\Model;

class UpdateAppRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

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
    public $language;

    /**
     * @var int[]
     */
    public $middleWareIdList;

    /**
     * @var string
     */
    public $operatingSystem;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var userRoles[]
     */
    public $userRoles;
    protected $_name = [
        'appId'            => 'AppId',
        'bizTitle'         => 'BizTitle',
        'description'      => 'Description',
        'language'         => 'Language',
        'middleWareIdList' => 'MiddleWareIdList',
        'operatingSystem'  => 'OperatingSystem',
        'serviceType'      => 'ServiceType',
        'userRoles'        => 'UserRoles',
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
        if (null !== $this->bizTitle) {
            $res['BizTitle'] = $this->bizTitle;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->middleWareIdList) {
            $res['MiddleWareIdList'] = $this->middleWareIdList;
        }
        if (null !== $this->operatingSystem) {
            $res['OperatingSystem'] = $this->operatingSystem;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
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
     * @return UpdateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BizTitle'])) {
            $model->bizTitle = $map['BizTitle'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MiddleWareIdList'])) {
            if (!empty($map['MiddleWareIdList'])) {
                $model->middleWareIdList = $map['MiddleWareIdList'];
            }
        }
        if (isset($map['OperatingSystem'])) {
            $model->operatingSystem = $map['OperatingSystem'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
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
