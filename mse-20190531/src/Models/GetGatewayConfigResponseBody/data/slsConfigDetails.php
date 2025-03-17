<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class slsConfigDetails extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @example gw-61f465fa2dd044069e2208c4912*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example ""
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example ""
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 0
     *
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $logOn;

    /**
     * @example mse_gw_access_log
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @example false
     *
     * @var bool
     */
    public $nginxCompatible;

    /**
     * @example test
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'logOn' => 'LogOn',
        'logStoreName' => 'LogStoreName',
        'nginxCompatible' => 'NginxCompatible',
        'projectName' => 'ProjectName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
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
        if (null !== $this->logOn) {
            $res['LogOn'] = $this->logOn;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->nginxCompatible) {
            $res['NginxCompatible'] = $this->nginxCompatible;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsConfigDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
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
        if (isset($map['LogOn'])) {
            $model->logOn = $map['LogOn'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['NginxCompatible'])) {
            $model->nginxCompatible = $map['NginxCompatible'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
