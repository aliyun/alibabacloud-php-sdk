<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectResponseBody extends Model
{
    /**
     * @description The workspace ID.
     *
     * @example 123456
     *
     * @var int
     */
    public $id;

    /**
     * @description The workspace ID. Note: This parameter is deprecated and is replaced by the Id parameter.
     *
     * @example 123456
     *
     * @deprecated
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The request ID.
     *
     * @example AFBB799F-8578-51C5-A766-E922EDB8XXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'id' => 'Id',
        'projectId' => 'ProjectId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
