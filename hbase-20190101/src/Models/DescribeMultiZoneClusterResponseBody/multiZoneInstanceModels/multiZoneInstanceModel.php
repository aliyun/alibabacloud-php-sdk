<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneClusterResponseBody\multiZoneInstanceModels;

use AlibabaCloud\Tea\Model;

class multiZoneInstanceModel extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $minorVersion;
    protected $_name = [
        'status'          => 'Status',
        'isLatestVersion' => 'IsLatestVersion',
        'insName'         => 'InsName',
        'role'            => 'Role',
        'minorVersion'    => 'MinorVersion',
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
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiZoneInstanceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        return $model;
    }
}
