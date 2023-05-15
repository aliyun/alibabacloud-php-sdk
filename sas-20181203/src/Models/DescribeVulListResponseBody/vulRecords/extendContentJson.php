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
     * @description The alias of the vulnerability.
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
     * @description The public IP address of the asset that is associated with the vulnerability.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The timestamp when the vulnerability was last detected. Unit: milliseconds.
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
     * @description The name of the operating system for your asset.
     *
     * @example centos
     *
     * @var string
     */
    public $os;

    /**
     * @description The release of the operating system.
     *
     * @example 7
     *
     * @var string
     */
    public $osRelease;

    /**
     * @description The ID of the vulnerability.
     *
     * @example 111
     *
     * @var int
     */
    public $primaryId;

    /**
     * @description The RPM Package Manager (RPM) packages.
     *
     * @var rpmEntityList[]
     */
    public $rpmEntityList;

    /**
     * @description The status of the vulnerability. Valid values:
     *
     *   **1**: unfixed
     *   **2**: fix failed
     *   3: rollback failed
     *   **4**: fixing
     *   **5**: being rolled back
     *   **6**: being verified
     *   **7**: fixed
     *   **8**: fixed and to be restarted
     *   **9**: rolled back
     *   **10**: ignored
     *   **11**: rolled back and to be restarted
     *   **12**: not found
     *   **20**: expired
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag that is added to the vulnerability.
     *
     * @example oval
     *
     * @var string
     */
    public $tag;

    /**
     * @description The CVE list.
     *
     * @var string[]
     */
    public $cveList;
    protected $_name = [
        'absolutePath'  => 'AbsolutePath',
        'aliasName'     => 'AliasName',
        'description'   => 'Description',
        'ip'            => 'Ip',
        'lastTs'        => 'LastTs',
        'necessity'     => 'Necessity',
        'os'            => 'Os',
        'osRelease'     => 'OsRelease',
        'primaryId'     => 'PrimaryId',
        'rpmEntityList' => 'RpmEntityList',
        'status'        => 'Status',
        'tag'           => 'Tag',
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
        if (isset($map['cveList'])) {
            if (!empty($map['cveList'])) {
                $model->cveList = $map['cveList'];
            }
        }

        return $model;
    }
}
