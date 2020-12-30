<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagECRouteBackupAttributeResponseBody\cidrs;
use AlibabaCloud\Tea\Model;

class DescribeSagECRouteBackupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $hcIp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $expressConnectionInterface;

    /**
     * @var bool
     */
    public $routeBackup;

    /**
     * @var string
     */
    public $expressConnectionNexthop;

    /**
     * @var string
     */
    public $sagId;

    /**
     * @var cidrs
     */
    public $cidrs;
    protected $_name = [
        'status'                     => 'Status',
        'hcIp'                       => 'HcIp',
        'requestId'                  => 'RequestId',
        'expressConnectionInterface' => 'ExpressConnectionInterface',
        'routeBackup'                => 'RouteBackup',
        'expressConnectionNexthop'   => 'ExpressConnectionNexthop',
        'sagId'                      => 'SagId',
        'cidrs'                      => 'Cidrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->hcIp) {
            $res['HcIp'] = $this->hcIp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expressConnectionInterface) {
            $res['ExpressConnectionInterface'] = $this->expressConnectionInterface;
        }
        if (null !== $this->routeBackup) {
            $res['RouteBackup'] = $this->routeBackup;
        }
        if (null !== $this->expressConnectionNexthop) {
            $res['ExpressConnectionNexthop'] = $this->expressConnectionNexthop;
        }
        if (null !== $this->sagId) {
            $res['SagId'] = $this->sagId;
        }
        if (null !== $this->cidrs) {
            $res['Cidrs'] = null !== $this->cidrs ? $this->cidrs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagECRouteBackupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HcIp'])) {
            $model->hcIp = $map['HcIp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpressConnectionInterface'])) {
            $model->expressConnectionInterface = $map['ExpressConnectionInterface'];
        }
        if (isset($map['RouteBackup'])) {
            $model->routeBackup = $map['RouteBackup'];
        }
        if (isset($map['ExpressConnectionNexthop'])) {
            $model->expressConnectionNexthop = $map['ExpressConnectionNexthop'];
        }
        if (isset($map['SagId'])) {
            $model->sagId = $map['SagId'];
        }
        if (isset($map['Cidrs'])) {
            $model->cidrs = cidrs::fromMap($map['Cidrs']);
        }

        return $model;
    }
}
