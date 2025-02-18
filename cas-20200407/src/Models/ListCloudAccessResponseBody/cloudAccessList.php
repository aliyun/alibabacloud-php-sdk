<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudAccessResponseBody;

use AlibabaCloud\Dara\Model;

class cloudAccessList extends Model
{
    /**
     * @var int
     */
    public $accessId;
    /**
     * @var string
     */
    public $cloudName;
    /**
     * @var string
     */
    public $secretId;
    /**
     * @var string
     */
    public $serviceStatus;
    protected $_name = [
        'accessId'      => 'AccessId',
        'cloudName'     => 'CloudName',
        'secretId'      => 'SecretId',
        'serviceStatus' => 'ServiceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
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
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }

        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        return $model;
    }
}
