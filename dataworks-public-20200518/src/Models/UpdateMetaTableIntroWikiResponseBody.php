<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaTableIntroWikiResponseBody extends Model
{
    /**
     * @description The request ID. You can troubleshoot issues based on the ID.
     *
     * @example abcde
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the instructions on how to use the table are updated.
     *
     * @example true
     *
     * @var bool
     */
    public $updateResult;
    protected $_name = [
        'requestId'    => 'RequestId',
        'updateResult' => 'UpdateResult',
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
        if (null !== $this->updateResult) {
            $res['UpdateResult'] = $this->updateResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetaTableIntroWikiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateResult'])) {
            $model->updateResult = $map['UpdateResult'];
        }

        return $model;
    }
}
