<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ListTextbookAssistantBookDirectoriesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tc_e6dc70c890866f4028ca685b6fa29874
     *
     * @var string
     */
    public $authToken;

    /**
     * @description This parameter is required.
     *
     * @example 231698
     *
     * @var string
     */
    public $bookId;

    /**
     * @description This parameter is required.
     *
     * @example SYNC
     *
     * @var string
     */
    public $scenario;
    protected $_name = [
        'authToken' => 'authToken',
        'bookId'    => 'bookId',
        'scenario'  => 'scenario',
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
        if (null !== $this->bookId) {
            $res['bookId'] = $this->bookId;
        }
        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTextbookAssistantBookDirectoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }
        if (isset($map['bookId'])) {
            $model->bookId = $map['bookId'];
        }
        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        return $model;
    }
}
