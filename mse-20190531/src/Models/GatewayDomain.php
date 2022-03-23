<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GatewayDomain extends Model
{
    /**
     * @description 使用的证书Id
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description 网关ID
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description 网关名称
     *
     * @var string
     */
    public $gatewayName;

    /**
     * @description 网关唯一标识
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Domain Id
     *
     * @var int
     */
    public $id;

    /**
     * @description 是否强制跳转
     *
     * @var string
     */
    public $mustHttps;

    /**
     * @description Domain Name
     *
     * @var string
     */
    public $name;

    /**
     * @description domainn的协议
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'certIdentifier'  => 'CertIdentifier',
        'gatewayId'       => 'GatewayId',
        'gatewayName'     => 'GatewayName',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'mustHttps'       => 'MustHttps',
        'name'            => 'Name',
        'protocol'        => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mustHttps) {
            $res['MustHttps'] = $this->mustHttps;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MustHttps'])) {
            $model->mustHttps = $map['MustHttps'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
