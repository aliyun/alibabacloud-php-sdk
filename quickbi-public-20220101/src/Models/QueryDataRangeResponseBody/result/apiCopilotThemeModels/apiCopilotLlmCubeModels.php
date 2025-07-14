<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponseBody\result\apiCopilotThemeModels;

use AlibabaCloud\Tea\Model;

class apiCopilotLlmCubeModels extends Model
{
    /**
     * @description Alias of the LLM cube resource.
     *
     * @example test
     *
     * @var string
     */
    public $alias;

    /**
     * @description Nickname of the creator.
     *
     * @example zhuge
     *
     * @var string
     */
    public $createUser;

    /**
     * @description LlmCube resource ID.
     *
     * @example 1231242231asdasda
     *
     * @var string
     */
    public $llmCubeId;
    protected $_name = [
        'alias' => 'Alias',
        'createUser' => 'CreateUser',
        'llmCubeId' => 'LlmCubeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->llmCubeId) {
            $res['LlmCubeId'] = $this->llmCubeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiCopilotLlmCubeModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['LlmCubeId'])) {
            $model->llmCubeId = $map['LlmCubeId'];
        }

        return $model;
    }
}
