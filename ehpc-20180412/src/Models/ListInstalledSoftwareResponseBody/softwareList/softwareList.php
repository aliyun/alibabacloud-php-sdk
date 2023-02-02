<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody\softwareList;

use AlibabaCloud\Tea\Model;

class softwareList extends Model
{
    /**
     * @example MPICH_3.2
     *
     * @var string
     */
    public $softwareId;

    /**
     * @example mpich
     *
     * @var string
     */
    public $softwareName;

    /**
     * @example Installing
     *
     * @var string
     */
    public $softwareStatus;

    /**
     * @example 3.2
     *
     * @var string
     */
    public $softwareVersion;
    protected $_name = [
        'softwareId'      => 'SoftwareId',
        'softwareName'    => 'SoftwareName',
        'softwareStatus'  => 'SoftwareStatus',
        'softwareVersion' => 'SoftwareVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }
        if (null !== $this->softwareName) {
            $res['SoftwareName'] = $this->softwareName;
        }
        if (null !== $this->softwareStatus) {
            $res['SoftwareStatus'] = $this->softwareStatus;
        }
        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwareList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }
        if (isset($map['SoftwareName'])) {
            $model->softwareName = $map['SoftwareName'];
        }
        if (isset($map['SoftwareStatus'])) {
            $model->softwareStatus = $map['SoftwareStatus'];
        }
        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }

        return $model;
    }
}
