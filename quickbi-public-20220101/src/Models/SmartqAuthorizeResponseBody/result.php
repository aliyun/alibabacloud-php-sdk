<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqAuthorizeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Reason for failure.
     *
     * @example INVALID_FILE_FORMAT
     *
     * @var string
     */
    public $detailMessage;

    /**
     * @description Q&A resource ID.
     *
     * @example 617277C****************ABA47E31
     *
     * @var string
     */
    public $llmCube;

    /**
     * @description Analysis theme ID.
     *
     * @example 617277C****************ABA47E31
     *
     * @var string
     */
    public $llmCubeTheme;

    /**
     * @description User ID.
     *
     * @example 617277C****************ABA47E31
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'detailMessage' => 'DetailMessage',
        'llmCube' => 'LlmCube',
        'llmCubeTheme' => 'LlmCubeTheme',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailMessage) {
            $res['DetailMessage'] = $this->detailMessage;
        }
        if (null !== $this->llmCube) {
            $res['LlmCube'] = $this->llmCube;
        }
        if (null !== $this->llmCubeTheme) {
            $res['LlmCubeTheme'] = $this->llmCubeTheme;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailMessage'])) {
            $model->detailMessage = $map['DetailMessage'];
        }
        if (isset($map['LlmCube'])) {
            $model->llmCube = $map['LlmCube'];
        }
        if (isset($map['LlmCubeTheme'])) {
            $model->llmCubeTheme = $map['LlmCubeTheme'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
