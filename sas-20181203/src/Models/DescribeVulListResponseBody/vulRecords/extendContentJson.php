<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson\necessity;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson\rpmEntityList;
use AlibabaCloud\Tea\Model;

class extendContentJson extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $cveList;

    /**
     * @var int
     */
    public $primaryId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $osRelease;

    /**
     * @var rpmEntityList[]
     */
    public $rpmEntityList;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $os;

    /**
     * @var int
     */
    public $lastTs;

    /**
     * @var necessity
     */
    public $necessity;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $absolutePath;
    protected $_name = [
        'status'        => 'Status',
        'cveList'       => 'cveList',
        'primaryId'     => 'PrimaryId',
        'tag'           => 'Tag',
        'osRelease'     => 'OsRelease',
        'rpmEntityList' => 'RpmEntityList',
        'ip'            => 'Ip',
        'os'            => 'Os',
        'lastTs'        => 'LastTs',
        'necessity'     => 'Necessity',
        'aliasName'     => 'AliasName',
        'absolutePath'  => 'AbsolutePath',
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
        if (null !== $this->cveList) {
            $res['cveList'] = $this->cveList;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->osRelease) {
            $res['OsRelease'] = $this->osRelease;
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = null !== $this->necessity ? $this->necessity->toMap() : null;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->absolutePath) {
            $res['AbsolutePath'] = $this->absolutePath;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['cveList'])) {
            if (!empty($map['cveList'])) {
                $model->cveList = $map['cveList'];
            }
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['OsRelease'])) {
            $model->osRelease = $map['OsRelease'];
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = necessity::fromMap($map['Necessity']);
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['AbsolutePath'])) {
            $model->absolutePath = $map['AbsolutePath'];
        }

        return $model;
    }
}
