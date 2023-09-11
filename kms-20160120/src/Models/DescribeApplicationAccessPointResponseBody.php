<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationAccessPointResponseBody extends Model
{
    /**
     * @example acs:kms:cn-hangzhou:119285303511****:applicationaccesspoint/aap_test
     *
     * @var string
     */
    public $arn;

    /**
     * @example ClientKey
     *
     * @var string
     */
    public $authenticationMethod;

    /**
     * @example aap description
     *
     * @var string
     */
    public $description;

    /**
     * @example aap_test
     *
     * @var string
     */
    public $name;

    /**
     * @example ["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]
     *
     * @var string
     */
    public $policies;

    /**
     * @example bcfefe15-46f0-44a3-bd96-3d422474b71a
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'arn'                  => 'Arn',
        'authenticationMethod' => 'AuthenticationMethod',
        'description'          => 'Description',
        'name'                 => 'Name',
        'policies'             => 'Policies',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->authenticationMethod) {
            $res['AuthenticationMethod'] = $this->authenticationMethod;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policies) {
            $res['Policies'] = $this->policies;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationAccessPointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['AuthenticationMethod'])) {
            $model->authenticationMethod = $map['AuthenticationMethod'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policies'])) {
            $model->policies = $map['Policies'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
