<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeOpenApiInfoRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $popCode;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'apiName' => 'ApiName',
        'apiVersion' => 'ApiVersion',
        'lang' => 'Lang',
        'popCode' => 'PopCode',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
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

        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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

        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
