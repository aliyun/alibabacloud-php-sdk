<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqAuthorizeResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $detailMessage;

    /**
     * @var string
     */
    public $llmCube;

    /**
     * @var string
     */
    public $llmCubeTheme;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'detailMessage' => 'DetailMessage',
        'llmCube' => 'LlmCube',
        'llmCubeTheme' => 'LlmCubeTheme',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
