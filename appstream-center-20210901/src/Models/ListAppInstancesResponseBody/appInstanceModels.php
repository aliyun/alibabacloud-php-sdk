<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class appInstanceModels extends Model
{
    /**
     * @example aig-dk8p95irqfst9****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example ai-8dl7dzchklmka****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example 2023-03-07T20:29:19.000+08:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-03-07T20:29:19.000+08:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 10.13.13.211
     *
     * @var string
     */
    public $mainEthPublicIp;

    /**
     * @example connect
     *
     * @var string
     */
    public $sessionStatus;

    /**
     * @example BOUND
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId'      => 'AppInstanceId',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'mainEthPublicIp'    => 'MainEthPublicIp',
        'sessionStatus'      => 'SessionStatus',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->mainEthPublicIp) {
            $res['MainEthPublicIp'] = $this->mainEthPublicIp;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInstanceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MainEthPublicIp'])) {
            $model->mainEthPublicIp = $map['MainEthPublicIp'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
