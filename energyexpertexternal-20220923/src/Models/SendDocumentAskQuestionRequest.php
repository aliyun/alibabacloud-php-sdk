<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class SendDocumentAskQuestionRequest extends Model
{
    /**
     * @example 1a851c4a-1d65-11ef-99a7-ssfsfdd
     *
     * @var string
     */
    public $folderId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $prompt;

    /**
     * @example bfce2248-1546-4298-8bcf-70ac26e69646
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'folderId'  => 'folderId',
        'prompt'    => 'prompt',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }
        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendDocumentAskQuestionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }
        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
