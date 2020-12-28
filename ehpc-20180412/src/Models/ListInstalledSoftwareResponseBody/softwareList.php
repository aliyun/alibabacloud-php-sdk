<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponseBody;

use AlibabaCloud\Tea\Model;

class softwareList extends Model
{
    /**
     * @var string
     */
    public $softwareVersion;

    /**
     * @var string
     */
    public $softwareName;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string
     */
    public $softwareStatus;
    protected $_name = [
        'softwareVersion' => 'SoftwareVersion',
        'softwareName'    => 'SoftwareName',
        'softwareId'      => 'SoftwareId',
        'softwareStatus'  => 'SoftwareStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }
        if (null !== $this->softwareName) {
            $res['SoftwareName'] = $this->softwareName;
        }
        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }
        if (null !== $this->softwareStatus) {
            $res['SoftwareStatus'] = $this->softwareStatus;
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
        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }
        if (isset($map['SoftwareName'])) {
            $model->softwareName = $map['SoftwareName'];
        }
        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }
        if (isset($map['SoftwareStatus'])) {
            $model->softwareStatus = $map['SoftwareStatus'];
        }

        return $model;
    }
}
