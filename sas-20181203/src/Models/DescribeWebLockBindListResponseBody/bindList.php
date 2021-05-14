<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockBindListResponseBody;

use AlibabaCloud\Tea\Model;

class bindList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $serviceDetail;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $auditCount;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $dirCount;

    /**
     * @var string
     */
    public $blockCount;
    protected $_name = [
        'status'        => 'Status',
        'percent'       => 'Percent',
        'internetIp'    => 'InternetIp',
        'serviceDetail' => 'ServiceDetail',
        'os'            => 'Os',
        'serviceStatus' => 'ServiceStatus',
        'intranetIp'    => 'IntranetIp',
        'auditCount'    => 'AuditCount',
        'uuid'          => 'Uuid',
        'serviceCode'   => 'ServiceCode',
        'instanceName'  => 'InstanceName',
        'dirCount'      => 'DirCount',
        'blockCount'    => 'BlockCount',
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
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->serviceDetail) {
            $res['ServiceDetail'] = $this->serviceDetail;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->auditCount) {
            $res['AuditCount'] = $this->auditCount;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->dirCount) {
            $res['DirCount'] = $this->dirCount;
        }
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['ServiceDetail'])) {
            $model->serviceDetail = $map['ServiceDetail'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['AuditCount'])) {
            $model->auditCount = $map['AuditCount'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['DirCount'])) {
            $model->dirCount = $map['DirCount'];
        }
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }

        return $model;
    }
}
