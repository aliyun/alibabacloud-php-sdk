<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockBindListResponseBody;

use AlibabaCloud\Tea\Model;

class bindList extends Model
{
    /**
     * @var string
     */
    public $auditCount;

    /**
     * @var string
     */
    public $blockCount;

    /**
     * @var string
     */
    public $dirCount;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $os;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceDetail;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'auditCount'    => 'AuditCount',
        'blockCount'    => 'BlockCount',
        'dirCount'      => 'DirCount',
        'instanceName'  => 'InstanceName',
        'internetIp'    => 'InternetIp',
        'intranetIp'    => 'IntranetIp',
        'os'            => 'Os',
        'percent'       => 'Percent',
        'serviceCode'   => 'ServiceCode',
        'serviceDetail' => 'ServiceDetail',
        'serviceStatus' => 'ServiceStatus',
        'status'        => 'Status',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditCount) {
            $res['AuditCount'] = $this->auditCount;
        }
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }
        if (null !== $this->dirCount) {
            $res['DirCount'] = $this->dirCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->serviceDetail) {
            $res['ServiceDetail'] = $this->serviceDetail;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditCount'])) {
            $model->auditCount = $map['AuditCount'];
        }
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }
        if (isset($map['DirCount'])) {
            $model->dirCount = $map['DirCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['ServiceDetail'])) {
            $model->serviceDetail = $map['ServiceDetail'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
