<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\GetBdrcServiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $openTime;

    /**
     * @var int
     */
    public $protectionScoreUpdatedTime;

    /**
     * @var string
     */
    public $serviceInitializeStatus;

    /**
     * @var string
     */
    public $serviceStatus;
    protected $_name = [
        'openTime' => 'OpenTime',
        'protectionScoreUpdatedTime' => 'ProtectionScoreUpdatedTime',
        'serviceInitializeStatus' => 'ServiceInitializeStatus',
        'serviceStatus' => 'ServiceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }

        if (null !== $this->protectionScoreUpdatedTime) {
            $res['ProtectionScoreUpdatedTime'] = $this->protectionScoreUpdatedTime;
        }

        if (null !== $this->serviceInitializeStatus) {
            $res['ServiceInitializeStatus'] = $this->serviceInitializeStatus;
        }

        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
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
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }

        if (isset($map['ProtectionScoreUpdatedTime'])) {
            $model->protectionScoreUpdatedTime = $map['ProtectionScoreUpdatedTime'];
        }

        if (isset($map['ServiceInitializeStatus'])) {
            $model->serviceInitializeStatus = $map['ServiceInitializeStatus'];
        }

        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        return $model;
    }
}
