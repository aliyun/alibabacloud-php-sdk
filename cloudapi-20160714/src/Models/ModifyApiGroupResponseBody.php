<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiGroupResponseBody extends Model
{
    /**
     * @example /test
     *
     * @var string
     */
    public $basePath;

    /**
     * @example New weather informations.
     *
     * @var string
     */
    public $description;

    /**
     * @example 523e8dc7bbe04613b5b1d726c2a7889d
     *
     * @var string
     */
    public $groupId;

    /**
     * @example NewWeather
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 4CF287C6-CE5B-477B-BE27-C48F99EADBC8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 523e8dc7bbe04613b5b1d726c2a7889d-cn-hangzhou.alicloudapi.com
     *
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'basePath'    => 'BasePath',
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'requestId'   => 'RequestId',
        'subDomain'   => 'SubDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
