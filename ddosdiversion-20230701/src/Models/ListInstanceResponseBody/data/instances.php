<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceResponseBody\data;

use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceResponseBody\data\instances\spec;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The description.
     *
     * @example description
     *
     * @var string
     */
    public $comment;

    /**
     * @description The purchase time.
     *
     * @example 2022-12-15 11:10:42
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The expiration time.
     *
     * @example 2023-02-23 00:00:00
     *
     * @var string
     */
    public $gmtExpire;

    /**
     * @description The update time.
     *
     * @example 2022-12-15 11:10:42
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @description The alias of the instance.
     *
     * @example ddos_diversion_public_cn-xxxxxxxxxxxxx_xxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The configurations of the instance.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the instance.
     *
     * @example ddos_diversion_public_cn-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $saleId;

    /**
     * @description The specifications of the instance.
     *
     * @var spec
     */
    public $spec;

    /**
     * @description The status of the instance. Valid values:
     *
     * - stopped
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The user ID.
     *
     * @example 177xxxxxxxxxxxxx
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'comment'    => 'Comment',
        'gmtCreate'  => 'GmtCreate',
        'gmtExpire'  => 'GmtExpire',
        'gmtModify'  => 'GmtModify',
        'instanceId' => 'InstanceId',
        'message'    => 'Message',
        'name'       => 'Name',
        'saleId'     => 'SaleId',
        'spec'       => 'Spec',
        'status'     => 'Status',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtExpire) {
            $res['GmtExpire'] = $this->gmtExpire;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtExpire'])) {
            $model->gmtExpire = $map['GmtExpire'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
