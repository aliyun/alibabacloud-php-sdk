<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ListTextbookAssistantArticlesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tc_a893b8492c4be046cbc906c566aeb8c9
     *
     * @var string
     */
    public $authToken;

    /**
     * @description This parameter is required.
     *
     * @example 90aa861b4d9311efbe6e0c42a106bb02
     *
     * @var string
     */
    public $directoryId;
    protected $_name = [
        'authToken'   => 'authToken',
        'directoryId' => 'directoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTextbookAssistantArticlesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }
        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        return $model;
    }
}
