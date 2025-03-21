<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDIJobResponseBody extends Model
{
    /**
     * @description This parameter is deprecated and is replaced by the Id parameter.
     *
     * @example 11792
     *
     * @deprecated
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 11792
     *
     * @var int
     */
    public $id;

    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 4F6AB6B3-41FB-5EBB-AFB2-0C98D49DA2BB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIJobId' => 'DIJobId',
        'id' => 'Id',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDIJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
