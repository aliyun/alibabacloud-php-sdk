<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaTableIntroWikiResponseBody extends Model
{
    /**
     * @var bool
     */
    public $updateResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'updateResult' => 'UpdateResult',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateResult) {
            $res['UpdateResult'] = $this->updateResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['UpdateResult'])) {
            $model->updateResult = $map['UpdateResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
