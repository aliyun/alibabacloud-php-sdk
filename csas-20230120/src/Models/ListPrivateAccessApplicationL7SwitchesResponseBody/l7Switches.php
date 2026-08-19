<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationL7SwitchesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationL7SwitchesResponseBody\l7Switches\portRanges;

class l7Switches extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $devTagMarkStatus;

    /**
     * @var string
     */
    public $downloadAuditStatus;

    /**
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @var string
     */
    public $srcIpMarkStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeoutSec;

    /**
     * @var string
     */
    public $userMarkStatus;

    /**
     * @var string
     */
    public $zeroTrustStatus;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'devTagMarkStatus' => 'DevTagMarkStatus',
        'downloadAuditStatus' => 'DownloadAuditStatus',
        'portRanges' => 'PortRanges',
        'srcIpMarkStatus' => 'SrcIpMarkStatus',
        'status' => 'Status',
        'timeoutSec' => 'TimeoutSec',
        'userMarkStatus' => 'UserMarkStatus',
        'zeroTrustStatus' => 'ZeroTrustStatus',
    ];

    public function validate()
    {
        if (\is_array($this->portRanges)) {
            Model::validateArray($this->portRanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->devTagMarkStatus) {
            $res['DevTagMarkStatus'] = $this->devTagMarkStatus;
        }

        if (null !== $this->downloadAuditStatus) {
            $res['DownloadAuditStatus'] = $this->downloadAuditStatus;
        }

        if (null !== $this->portRanges) {
            if (\is_array($this->portRanges)) {
                $res['PortRanges'] = [];
                $n1 = 0;
                foreach ($this->portRanges as $item1) {
                    $res['PortRanges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->srcIpMarkStatus) {
            $res['SrcIpMarkStatus'] = $this->srcIpMarkStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timeoutSec) {
            $res['TimeoutSec'] = $this->timeoutSec;
        }

        if (null !== $this->userMarkStatus) {
            $res['UserMarkStatus'] = $this->userMarkStatus;
        }

        if (null !== $this->zeroTrustStatus) {
            $res['ZeroTrustStatus'] = $this->zeroTrustStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['DevTagMarkStatus'])) {
            $model->devTagMarkStatus = $map['DevTagMarkStatus'];
        }

        if (isset($map['DownloadAuditStatus'])) {
            $model->downloadAuditStatus = $map['DownloadAuditStatus'];
        }

        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n1 = 0;
                foreach ($map['PortRanges'] as $item1) {
                    $model->portRanges[$n1] = portRanges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SrcIpMarkStatus'])) {
            $model->srcIpMarkStatus = $map['SrcIpMarkStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TimeoutSec'])) {
            $model->timeoutSec = $map['TimeoutSec'];
        }

        if (isset($map['UserMarkStatus'])) {
            $model->userMarkStatus = $map['UserMarkStatus'];
        }

        if (isset($map['ZeroTrustStatus'])) {
            $model->zeroTrustStatus = $map['ZeroTrustStatus'];
        }

        return $model;
    }
}
