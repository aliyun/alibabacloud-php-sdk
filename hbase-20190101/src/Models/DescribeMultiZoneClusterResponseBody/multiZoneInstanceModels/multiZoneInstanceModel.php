<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponseBody\multiZoneInstanceModels;

use AlibabaCloud\Dara\Model;

class multiZoneInstanceModel extends Model
{
    /**
     * @var string
     */
    public $hdfsMinorVersion;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $isHdfsLatestVersion;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $latestHdfsMinorVersion;

    /**
     * @var string
     */
    public $latestMinorVersion;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'hdfsMinorVersion' => 'HdfsMinorVersion',
        'insName' => 'InsName',
        'isHdfsLatestVersion' => 'IsHdfsLatestVersion',
        'isLatestVersion' => 'IsLatestVersion',
        'latestHdfsMinorVersion' => 'LatestHdfsMinorVersion',
        'latestMinorVersion' => 'LatestMinorVersion',
        'minorVersion' => 'MinorVersion',
        'role' => 'Role',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hdfsMinorVersion) {
            $res['HdfsMinorVersion'] = $this->hdfsMinorVersion;
        }

        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }

        if (null !== $this->isHdfsLatestVersion) {
            $res['IsHdfsLatestVersion'] = $this->isHdfsLatestVersion;
        }

        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }

        if (null !== $this->latestHdfsMinorVersion) {
            $res['LatestHdfsMinorVersion'] = $this->latestHdfsMinorVersion;
        }

        if (null !== $this->latestMinorVersion) {
            $res['LatestMinorVersion'] = $this->latestMinorVersion;
        }

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['HdfsMinorVersion'])) {
            $model->hdfsMinorVersion = $map['HdfsMinorVersion'];
        }

        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }

        if (isset($map['IsHdfsLatestVersion'])) {
            $model->isHdfsLatestVersion = $map['IsHdfsLatestVersion'];
        }

        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }

        if (isset($map['LatestHdfsMinorVersion'])) {
            $model->latestHdfsMinorVersion = $map['LatestHdfsMinorVersion'];
        }

        if (isset($map['LatestMinorVersion'])) {
            $model->latestMinorVersion = $map['LatestMinorVersion'];
        }

        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
