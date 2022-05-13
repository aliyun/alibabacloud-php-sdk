<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateVGroupRequest extends Model
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
     * @description 用户ID
     *
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
     * @description 实例ID
     *
     * @var string
     */
    public $seataServerUniqueId;
    protected $_name = [
        'acceptLanguage'      => 'AcceptLanguage',
        'name'                => 'Name',
        'primaryUser'         => 'PrimaryUser',
        'region'              => 'Region',
        'seataServerUniqueId' => 'SeataServerUniqueId',
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
        if (null !== $this->seataServerUniqueId) {
            $res['SeataServerUniqueId'] = $this->seataServerUniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVGroupRequest
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
        if (isset($map['SeataServerUniqueId'])) {
            $model->seataServerUniqueId = $map['SeataServerUniqueId'];
        }

        return $model;
    }
}
