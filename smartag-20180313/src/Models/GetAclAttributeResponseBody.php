<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GetAclAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var int
     */
    public $errorConfigSmartAGCount;

    /**
     * @var string
     */
    public $aclName;
    protected $_name = [
        'requestId'               => 'RequestId',
        'aclId'                   => 'AclId',
        'errorConfigSmartAGCount' => 'ErrorConfigSmartAGCount',
        'aclName'                 => 'AclName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->errorConfigSmartAGCount) {
            $res['ErrorConfigSmartAGCount'] = $this->errorConfigSmartAGCount;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAclAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['ErrorConfigSmartAGCount'])) {
            $model->errorConfigSmartAGCount = $map['ErrorConfigSmartAGCount'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }

        return $model;
    }
}
