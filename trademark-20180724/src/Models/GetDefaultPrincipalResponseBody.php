<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class GetDefaultPrincipalResponseBody extends Model
{
    /**
     * @var string
     */
    public $principalDescription;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $principalValue;
    protected $_name = [
        'principalDescription' => 'PrincipalDescription',
        'principalName'        => 'PrincipalName',
        'requestId'            => 'RequestId',
        'principalValue'       => 'PrincipalValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principalDescription) {
            $res['PrincipalDescription'] = $this->principalDescription;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->principalValue) {
            $res['PrincipalValue'] = $this->principalValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDefaultPrincipalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrincipalDescription'])) {
            $model->principalDescription = $map['PrincipalDescription'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrincipalValue'])) {
            $model->principalValue = $map['PrincipalValue'];
        }

        return $model;
    }
}
