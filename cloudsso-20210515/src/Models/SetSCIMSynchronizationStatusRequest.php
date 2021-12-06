<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class SetSCIMSynchronizationStatusRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $SCIMSynchronizationStatus;
    protected $_name = [
        'directoryId'               => 'DirectoryId',
        'SCIMSynchronizationStatus' => 'SCIMSynchronizationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->SCIMSynchronizationStatus) {
            $res['SCIMSynchronizationStatus'] = $this->SCIMSynchronizationStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSCIMSynchronizationStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['SCIMSynchronizationStatus'])) {
            $model->SCIMSynchronizationStatus = $map['SCIMSynchronizationStatus'];
        }

        return $model;
    }
}
