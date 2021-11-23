<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeMongoDBLogConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $isEtlMetaExist;

    /**
     * @var int
     */
    public $isUserProjectLogstoreExist;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userProjectName;
    protected $_name = [
        'isEtlMetaExist'             => 'IsEtlMetaExist',
        'isUserProjectLogstoreExist' => 'IsUserProjectLogstoreExist',
        'requestId'                  => 'RequestId',
        'userProjectName'            => 'UserProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isEtlMetaExist) {
            $res['IsEtlMetaExist'] = $this->isEtlMetaExist;
        }
        if (null !== $this->isUserProjectLogstoreExist) {
            $res['IsUserProjectLogstoreExist'] = $this->isUserProjectLogstoreExist;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userProjectName) {
            $res['UserProjectName'] = $this->userProjectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMongoDBLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsEtlMetaExist'])) {
            $model->isEtlMetaExist = $map['IsEtlMetaExist'];
        }
        if (isset($map['IsUserProjectLogstoreExist'])) {
            $model->isUserProjectLogstoreExist = $map['IsUserProjectLogstoreExist'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserProjectName'])) {
            $model->userProjectName = $map['UserProjectName'];
        }

        return $model;
    }
}
