<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models\ListDatabaseAccessPointResponseBody;

use AlibabaCloud\Tea\Model;

class dbInstanceAccessPointList extends Model
{
    /**
     * @example 10.0.0.0
     *
     * @var string
     */
    public $accessAddr;

    /**
     * @example 33306
     *
     * @var int
     */
    public $accessPort;

    /**
     * @example dg-db-n2a285spnpy3****
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example 2023-03-09 14:20:04.0
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 2023-03-09 14:20:04.0
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example dg-nmz841r7b681****
     *
     * @var string
     */
    public $routerId;

    /**
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $vpcAzoneId;

    /**
     * @example vpc-2ze0612ts436tn0sh****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-8vbgi74rgel72rax4****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'accessAddr'   => 'AccessAddr',
        'accessPort'   => 'AccessPort',
        'dbInstanceId' => 'DbInstanceId',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'routerId'     => 'RouterId',
        'vpcAzoneId'   => 'VpcAzoneId',
        'vpcId'        => 'VpcId',
        'vswitchId'    => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessAddr) {
            $res['AccessAddr'] = $this->accessAddr;
        }
        if (null !== $this->accessPort) {
            $res['AccessPort'] = $this->accessPort;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->vpcAzoneId) {
            $res['VpcAzoneId'] = $this->vpcAzoneId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstanceAccessPointList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessAddr'])) {
            $model->accessAddr = $map['AccessAddr'];
        }
        if (isset($map['AccessPort'])) {
            $model->accessPort = $map['AccessPort'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['VpcAzoneId'])) {
            $model->vpcAzoneId = $map['VpcAzoneId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
