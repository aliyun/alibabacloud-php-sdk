<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson\necessity;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson\rpmEntityList;
use AlibabaCloud\Tea\Model;

class extendContentJson extends Model
{
    /**
     * @description The package path of the software that has the vulnerability.
     *
     * @example /roo/www/web
     *
     * @var string
     */
    public $absolutePath;

    /**
     * @description The name of the vulnerability.
     *
     * @example RHSA-2019:0230-Important: polkit security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The description of the vulnerability.
     *
     * @example kernel version:5.10.84-10.2.al8.x86_64
     *
     * @var string
     */
    public $description;

    /**
     * @example com.xxl.rpc.util.XxlRpcException: xxl-rpc request data is empty.\n\tat com.xxl.rpc.remoting.net.impl.servlet.serve"
     *
     * @var string
     */
    public $emgProof;

    /**
     * @description The public IP address of the asset that is associated with the vulnerability.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The timestamp that was generated when the vulnerability was last detected. Unit: milliseconds.
     *
     * @example 1620404763000
     *
     * @var int
     */
    public $lastTs;

    /**
     * @description Indicates whether the vulnerability needs to be fixed.
     *
     * @var necessity
     */
    public $necessity;

    /**
     * @description The name of the operating system.
     *
     * @example centos
     *
     * @var string
     */
    public $os;

    /**
     * @description The information about the operating system version.
     *
     * @example 7
     *
     * @var string
     */
    public $osRelease;

    /**
     * @description The vulnerability ID.
     *
     * @example 111
     *
     * @var int
     */
    public $primaryId;

    /**
     * @description The information about RPM Package Manager (RPM) packages.
     *
     * @var rpmEntityList[]
     */
    public $rpmEntityList;

    /**
     * @description The status of the vulnerability. Valid values:
     *
     *   **1**: The vulnerability is unfixed.
     *   **2**: The vulnerability failed to be fixed.
     *   3: The system failed to be rolled back.
     *   **4**: The vulnerability is being fixed.
     *   **5**: The system is being rolled back.
     *   **6**: The vulnerability is being verified.
     *   **7**: The vulnerability is fixed.
     *   **8**: The vulnerability is fixed and the system is to be restarted.
     *   **9**: The system is rolled back.
     *   **10**: The vulnerability is ignored.
     *   **11**: The system is rolled back and is to be restarted.
     *   **12**: The vulnerability is not found.
     *   **20**: The vulnerability expires.
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag of the vulnerability.
     *
     * @example oval
     *
     * @var string
     */
    public $tag;

    /**
     * @example http://39.99.XX.XX:30005/toLogin
     *
     * @var string
     */
    public $target;

    /**
     * @description The CVE.
     *
     * @var string[]
     */
    public $cveList;
    protected $_name = [
        'absolutePath'  => 'AbsolutePath',
        'aliasName'     => 'AliasName',
        'description'   => 'Description',
        'emgProof'      => 'EmgProof',
        'ip'            => 'Ip',
        'lastTs'        => 'LastTs',
        'necessity'     => 'Necessity',
        'os'            => 'Os',
        'osRelease'     => 'OsRelease',
        'primaryId'     => 'PrimaryId',
        'rpmEntityList' => 'RpmEntityList',
        'status'        => 'Status',
        'tag'           => 'Tag',
        'target'        => 'Target',
        'cveList'       => 'cveList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->absolutePath) {
            $res['AbsolutePath'] = $this->absolutePath;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->emgProof) {
            $res['EmgProof'] = $this->emgProof;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = null !== $this->necessity ? $this->necessity->toMap() : null;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osRelease) {
            $res['OsRelease'] = $this->osRelease;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->rpmEntityList) {
            $res['RpmEntityList'] = [];
            if (null !== $this->rpmEntityList && \is_array($this->rpmEntityList)) {
                $n = 0;
                foreach ($this->rpmEntityList as $item) {
                    $res['RpmEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->cveList) {
            $res['cveList'] = $this->cveList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendContentJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbsolutePath'])) {
            $model->absolutePath = $map['AbsolutePath'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EmgProof'])) {
            $model->emgProof = $map['EmgProof'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = necessity::fromMap($map['Necessity']);
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsRelease'])) {
            $model->osRelease = $map['OsRelease'];
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['RpmEntityList'])) {
            if (!empty($map['RpmEntityList'])) {
                $model->rpmEntityList = [];
                $n                    = 0;
                foreach ($map['RpmEntityList'] as $item) {
                    $model->rpmEntityList[$n++] = null !== $item ? rpmEntityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['cveList'])) {
            if (!empty($map['cveList'])) {
                $model->cveList = $map['cveList'];
            }
        }

        return $model;
    }
}
