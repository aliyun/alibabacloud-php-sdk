<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class SmartqAuthorizeRequest extends Model
{
    /**
     * @description Array of dataset IDs, separated by English commas. <notice>This parameter will be converted to the corresponding question resource ID for authorization. Therefore, if the input cubeId does not correspond to any question resource, an error indicating that the question resource does not exist will be reported. Please ensure the correctness of the cubeId.</notice>
     *
     * @example wasdasd*******1235235sd,ASDAS*********ASDAW123
     *
     * @var string
     */
    public $cubeIds;

    /**
     * @description Expiration time, with a default of seven days.
     * Format: 2099-12-31
     *
     * @example 2099-12-31
     *
     * @var string
     */
    public $expireDay;

    /**
     * @description Array of analysis theme IDs, separated by English commas.
     *
     * @example wasdasd*******1235235sd,ASDAS*********ASDAW123
     *
     * @var string
     */
    public $llmCubeThemes;

    /**
     * @description Array of Q&A resource IDs, separated by English commas.
     *
     * @example wasdasd*******1235235sd,ASDAS*********ASDAW123
     *
     * @var string
     */
    public $llmCubes;

    /**
     * @description Operation type. The values are as follows:
     * - 0: Add authorization
     * - 1: Remove authorization
     *
     * This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $operationType;

    /**
     * @description Array of user IDs, separated by English commas.
     * >Notice: The number of user IDs per request * (number of Q&A resources + number of analysis themes) cannot exceed 100.
     *
     * This parameter is required.
     *
     * @example wasdasd*******1235235sd,ASDAS*********ASDAW123
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SmartqAuthorizeRequest
     */
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
