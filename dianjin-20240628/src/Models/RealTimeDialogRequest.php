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

use AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogRequest\conversationModel;
use AlibabaCloud\Tea\Model;

class RealTimeDialogRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $analysis;

    /**
     * @example mixIntentChat
     *
     * @var string
     */
    public $bizType;

    /**
     * @description This parameter is required.
     *
     * @var conversationModel[]
     */
    public $conversationModel;

    /**
     * @example 3
     *
     * @var int
     */
    public $dialogMemoryTurns;

    /**
     * @var mixed[]
     */
    public $metaData;

    /**
     * @example false
     *
     * @var bool
     */
    public $recommend;

    /**
     * @var string
     */
    public $scriptContentPlayed;

    /**
     * @description This parameter is required.
     *
     * @example 237645726354
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example false
     *
     * @var bool
     */
    public $stream;

    /**
     * @var bool
     */
    public $userVad;
    protected $_name = [
        'analysis' => 'analysis',
        'bizType' => 'bizType',
        'conversationModel' => 'conversationModel',
        'dialogMemoryTurns' => 'dialogMemoryTurns',
        'metaData' => 'metaData',
        'recommend' => 'recommend',
        'scriptContentPlayed' => 'scriptContentPlayed',
        'sessionId' => 'sessionId',
        'stream' => 'stream',
        'userVad' => 'userVad',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['analysis'] = $this->analysis;
        }
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }
        if (null !== $this->conversationModel) {
            $res['conversationModel'] = [];
            if (null !== $this->conversationModel && \is_array($this->conversationModel)) {
                $n = 0;
                foreach ($this->conversationModel as $item) {
                    $res['conversationModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dialogMemoryTurns) {
            $res['dialogMemoryTurns'] = $this->dialogMemoryTurns;
        }
        if (null !== $this->metaData) {
            $res['metaData'] = $this->metaData;
        }
        if (null !== $this->recommend) {
            $res['recommend'] = $this->recommend;
        }
        if (null !== $this->scriptContentPlayed) {
            $res['scriptContentPlayed'] = $this->scriptContentPlayed;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }
        if (null !== $this->userVad) {
            $res['userVad'] = $this->userVad;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RealTimeDialogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysis'])) {
            $model->analysis = $map['analysis'];
        }
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }
        if (isset($map['conversationModel'])) {
            if (!empty($map['conversationModel'])) {
                $model->conversationModel = [];
                $n = 0;
                foreach ($map['conversationModel'] as $item) {
                    $model->conversationModel[$n++] = null !== $item ? conversationModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dialogMemoryTurns'])) {
            $model->dialogMemoryTurns = $map['dialogMemoryTurns'];
        }
        if (isset($map['metaData'])) {
            $model->metaData = $map['metaData'];
        }
        if (isset($map['recommend'])) {
            $model->recommend = $map['recommend'];
        }
        if (isset($map['scriptContentPlayed'])) {
            $model->scriptContentPlayed = $map['scriptContentPlayed'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }
        if (isset($map['userVad'])) {
            $model->userVad = $map['userVad'];
        }

        return $model;
    }
}
