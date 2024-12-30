<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class SmartqAuthorizeRequest extends Model
{
    /**
     * @example 2099-12-31
     *
     * @var string
     */
    public $expireDay;

    /**
     * @example wasdasd*******1235235sd,ASDAS*********ASDAW123
     *
     * @var string
     */
    public $llmCubeThemes;

    /**
     * @example wasdasd*******1235235sd,ASDAS*********ASDAW123
     *
     * @var string
     */
    public $llmCubes;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $operationType;

    /**
     * @description This parameter is required.
     *
     * @example wasdasd*******1235235sd,ASDAS*********ASDAW123
     *
     * @var string
     */
    public $userIds;
    protected $_name = [
        'expireDay'     => 'ExpireDay',
        'llmCubeThemes' => 'LlmCubeThemes',
        'llmCubes'      => 'LlmCubes',
        'operationType' => 'OperationType',
        'userIds'       => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireDay) {
            $res['ExpireDay'] = $this->expireDay;
        }
        if (null !== $this->llmCubeThemes) {
            $res['LlmCubeThemes'] = $this->llmCubeThemes;
        }
        if (null !== $this->llmCubes) {
            $res['LlmCubes'] = $this->llmCubes;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmartqAuthorizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireDay'])) {
            $model->expireDay = $map['ExpireDay'];
        }
        if (isset($map['LlmCubeThemes'])) {
            $model->llmCubeThemes = $map['LlmCubeThemes'];
        }
        if (isset($map['LlmCubes'])) {
            $model->llmCubes = $map['LlmCubes'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }

        return $model;
    }
}
