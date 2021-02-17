<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeMongoDBLogConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $userProjectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $isUserProjectLogstoreExist;

    /**
     * @var int
     */
    public $isEtlMetaExist;
    protected $_name = [
        'userProjectName'            => 'UserProjectName',
        'requestId'                  => 'RequestId',
        'isUserProjectLogstoreExist' => 'IsUserProjectLogstoreExist',
        'isEtlMetaExist'             => 'IsEtlMetaExist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userProjectName) {
            $res['UserProjectName'] = $this->userProjectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isUserProjectLogstoreExist) {
            $res['IsUserProjectLogstoreExist'] = $this->isUserProjectLogstoreExist;
        }
        if (null !== $this->isEtlMetaExist) {
            $res['IsEtlMetaExist'] = $this->isEtlMetaExist;
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
        if (isset($map['UserProjectName'])) {
            $model->userProjectName = $map['UserProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsUserProjectLogstoreExist'])) {
            $model->isUserProjectLogstoreExist = $map['IsUserProjectLogstoreExist'];
        }
        if (isset($map['IsEtlMetaExist'])) {
            $model->isEtlMetaExist = $map['IsEtlMetaExist'];
        }

        return $model;
    }
}
