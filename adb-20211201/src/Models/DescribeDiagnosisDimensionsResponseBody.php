<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisDimensionsResponseBody extends Model
{
    /**
     * @description The queried source IP addresses.
     *
     * @var string[]
     */
    public $clientIps;

    /**
     * @description The queried database names.
     *
     * @var string[]
     */
    public $databases;

    /**
     * @description The request ID.
     *
     * @example DEA97C6B-D7A4-5E69-9EFC-D7F88737CED5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried resource group names.
     *
     * @var string[]
     */
    public $resourceGroups;

    /**
     * @description The queried usernames.
     *
     * @var string[]
     */
    public $userNames;
    protected $_name = [
        'clientIps'      => 'ClientIps',
        'databases'      => 'Databases',
        'requestId'      => 'RequestId',
        'resourceGroups' => 'ResourceGroups',
        'userNames'      => 'UserNames',
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
        if (null !== $this->databases) {
            $res['Databases'] = $this->databases;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = $this->resourceGroups;
        }
        if (null !== $this->userNames) {
            $res['UserNames'] = $this->userNames;
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
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = $map['Databases'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
