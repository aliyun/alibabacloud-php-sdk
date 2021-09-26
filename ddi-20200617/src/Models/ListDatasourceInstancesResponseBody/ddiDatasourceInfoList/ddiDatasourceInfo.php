<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListDatasourceInstancesResponseBody\ddiDatasourceInfoList;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListDatasourceInstancesResponseBody\ddiDatasourceInfoList\ddiDatasourceInfo\privateAddressList;
use AlibabaCloud\Tea\Model;

class ddiDatasourceInfo extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $descreption;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var privateAddressList
     */
    public $privateAddressList;

    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'createTime'         => 'CreateTime',
        'datasourceId'       => 'DatasourceId',
        'descreption'        => 'Descreption',
        'modifyTime'         => 'ModifyTime',
        'name'               => 'Name',
        'status'             => 'Status',
        'type'               => 'Type',
        'vswitchId'          => 'VswitchId',
        'privateAddressList' => 'PrivateAddressList',
        'securityGroupId'    => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->descreption) {
            $res['Descreption'] = $this->descreption;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->privateAddressList) {
            $res['PrivateAddressList'] = null !== $this->privateAddressList ? $this->privateAddressList->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddiDatasourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['Descreption'])) {
            $model->descreption = $map['Descreption'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['PrivateAddressList'])) {
            $model->privateAddressList = privateAddressList::fromMap($map['PrivateAddressList']);
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
