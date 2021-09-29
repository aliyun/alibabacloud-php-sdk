<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListRpcServicesResponseBody\rpcServices;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $interfaceName;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $isDelete;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'methodName'    => 'MethodName',
        'type'          => 'Type',
        'interfaceName' => 'InterfaceName',
        'params'        => 'Params',
        'appKey'        => 'AppKey',
        'groupName'     => 'GroupName',
        'gmtCreate'     => 'GmtCreate',
        'isDelete'      => 'IsDelete',
        'versionCode'   => 'VersionCode',
        'gmtModified'   => 'GmtModified',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->interfaceName) {
            $res['InterfaceName'] = $this->interfaceName;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['InterfaceName'])) {
            $model->interfaceName = $map['InterfaceName'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
