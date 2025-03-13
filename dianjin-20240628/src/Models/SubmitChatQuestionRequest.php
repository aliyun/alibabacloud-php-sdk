<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\SubmitChatQuestionRequest\questionList;
use AlibabaCloud\Tea\Model;

class SubmitChatQuestionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2024-09-27 11:23:20
     *
     * @var string
     */
    public $gmtService;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $liveScriptContent;

    /**
     * @example true
     *
     * @var bool
     */
    public $openSmallTalk;

    /**
     * @description This parameter is required.
     *
     * @var questionList[]
     */
    public $questionList;

    /**
     * @description This parameter is required.
     *
     * @example 0FC6636E-380A-5369-AE01-D1C15BB9B254
     *
     * @var string
     */
    public $requestId;

    /**
     * @description This parameter is required.
     *
     * @example 237645726354
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'gmtService' => 'gmtService',
        'liveScriptContent' => 'liveScriptContent',
        'openSmallTalk' => 'openSmallTalk',
        'questionList' => 'questionList',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtService) {
            $res['gmtService'] = $this->gmtService;
        }
        if (null !== $this->liveScriptContent) {
            $res['liveScriptContent'] = $this->liveScriptContent;
        }
        if (null !== $this->openSmallTalk) {
            $res['openSmallTalk'] = $this->openSmallTalk;
        }
        if (null !== $this->questionList) {
            $res['questionList'] = [];
            if (null !== $this->questionList && \is_array($this->questionList)) {
                $n = 0;
                foreach ($this->questionList as $item) {
                    $res['questionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitChatQuestionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtService'])) {
            $model->gmtService = $map['gmtService'];
        }
        if (isset($map['liveScriptContent'])) {
            $model->liveScriptContent = $map['liveScriptContent'];
        }
        if (isset($map['openSmallTalk'])) {
            $model->openSmallTalk = $map['openSmallTalk'];
        }
        if (isset($map['questionList'])) {
            if (!empty($map['questionList'])) {
                $model->questionList = [];
                $n = 0;
                foreach ($map['questionList'] as $item) {
                    $model->questionList[$n++] = null !== $item ? questionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
