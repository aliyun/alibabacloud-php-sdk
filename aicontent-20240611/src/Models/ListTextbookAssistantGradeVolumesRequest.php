<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ListTextbookAssistantGradeVolumesRequest extends Model
{
    /**
     * @example tc_197bf5bb81889cc79eb51ae9b8c0cea3
     *
     * @var string
     */
    public $authToken;

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
        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTextbookAssistantGradeVolumesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }
        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        return $model;
    }
}
