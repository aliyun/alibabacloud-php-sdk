<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListRpcServicesResponseBody\rpcServices;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $interfaceName;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $isDelete;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'id'            => 'Id',
        'appKey'        => 'AppKey',
        'interfaceName' => 'InterfaceName',
        'groupName'     => 'GroupName',
        'type'          => 'Type',
        'params'        => 'Params',
        'isDelete'      => 'IsDelete',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'methodName'    => 'MethodName',
        'versionCode'   => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->interfaceName) {
            $res['InterfaceName'] = $this->interfaceName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['InterfaceName'])) {
            $model->interfaceName = $map['InterfaceName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
