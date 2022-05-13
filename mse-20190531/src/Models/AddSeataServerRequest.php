<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddSeataServerRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description 集群名称
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $primaryUser;

    /**
     * @description 地域
     *
     * @var string
     */
    public $region;

    /**
     * @description 节点数量
     *
     * @var int
     */
    public $replica;

    /**
     * @description 专有网络ID
     *
     * @var string
     */
    public $vpc;

    /**
     * @var string
     */
    public $vswitch;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'name'           => 'Name',
        'primaryUser'    => 'PrimaryUser',
        'region'         => 'Region',
        'replica'        => 'Replica',
        'vpc'            => 'Vpc',
        'vswitch'        => 'Vswitch',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSeataServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
