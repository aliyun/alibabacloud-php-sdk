<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class SmartqAuthorizeRequest extends Model
{
    /**
     * @var string
     */
    public $cubeIds;

    /**
     * @var string
     */
    public $expireDay;

    /**
     * @var string
     */
    public $llmCubeThemes;

    /**
     * @var string
     */
    public $llmCubes;

    /**
     * @var int
     */
    public $operationType;

    /**
     * @var string
     */
    public $userIds;
    protected $_name = [
        'cubeIds' => 'CubeIds',
        'expireDay' => 'ExpireDay',
        'llmCubeThemes' => 'LlmCubeThemes',
        'llmCubes' => 'LlmCubes',
        'operationType' => 'OperationType',
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeIds) {
            $res['CubeIds'] = $this->cubeIds;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeIds'])) {
            $model->cubeIds = $map['CubeIds'];
        }

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
