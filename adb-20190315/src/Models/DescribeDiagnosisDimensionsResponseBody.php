<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisDimensionsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $clientIps;

    /**
     * @var string[]
     */
    public $resourceGroups;

    /**
     * @var string[]
     */
    public $userNames;

    /**
     * @var string[]
     */
    public $databases;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientIps'      => 'ClientIps',
        'resourceGroups' => 'ResourceGroups',
        'userNames'      => 'UserNames',
        'databases'      => 'Databases',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIps) {
            $res['ClientIps'] = $this->clientIps;
        }
        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = $this->resourceGroups;
        }
        if (null !== $this->userNames) {
            $res['UserNames'] = $this->userNames;
        }
        if (null !== $this->databases) {
            $res['Databases'] = $this->databases;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisDimensionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIps'])) {
            if (!empty($map['ClientIps'])) {
                $model->clientIps = $map['ClientIps'];
            }
        }
        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = $map['ResourceGroups'];
            }
        }
        if (isset($map['UserNames'])) {
            if (!empty($map['UserNames'])) {
                $model->userNames = $map['UserNames'];
            }
        }
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = $map['Databases'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
