<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson\necessity;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson\rpmEntityList;

class extendContentJson extends Model
{
    /**
     * @var string
     */
    public $absolutePath;
    /**
     * @var string
     */
    public $aliasName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $emgProof;
    /**
     * @var string
     */
    public $ip;
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
    public $os;
    /**
     * @var string
     */
    public $osRelease;
    /**
     * @var int
     */
    public $primaryId;
    /**
     * @var rpmEntityList[]
     */
    public $rpmEntityList;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $target;
    /**
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
        if (null !== $this->necessity) {
            $this->necessity->validate();
        }
        if (\is_array($this->rpmEntityList)) {
            Model::validateArray($this->rpmEntityList);
        }
        if (\is_array($this->cveList)) {
            Model::validateArray($this->cveList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Necessity'] = null !== $this->necessity ? $this->necessity->toArray($noStream) : $this->necessity;
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
            if (\is_array($this->rpmEntityList)) {
                $res['RpmEntityList'] = [];
                $n1                   = 0;
                foreach ($this->rpmEntityList as $item1) {
                    $res['RpmEntityList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->cveList)) {
                $res['cveList'] = [];
                $n1             = 0;
                foreach ($this->cveList as $item1) {
                    $res['cveList'][$n1++] = $item1;
                }
            }
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
                $n1                   = 0;
                foreach ($map['RpmEntityList'] as $item1) {
                    $model->rpmEntityList[$n1++] = rpmEntityList::fromMap($item1);
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
                $model->cveList = [];
                $n1             = 0;
                foreach ($map['cveList'] as $item1) {
                    $model->cveList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
