<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteCasterProgramResponseBody extends Model
{
    /**
     * @description The ID of the production studio. You can specify the ID as a request parameter in the API operation that is used to add, delete, or modify episodes in the production studio.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'casterId' => 'CasterId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCasterProgramResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
