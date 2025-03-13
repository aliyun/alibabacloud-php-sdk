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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDialoguesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $bot;

    /**
     * @example 2024-01-04 11:46:07
     *
     * @var string
     */
    public $createTime;

    /**
     * @example xx
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 2
     *
     * @var int
     */
    public $dialogueType;

    /**
     * @example xx
     *
     * @var string
     */
    public $taskId;

    /**
     * @example x
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'bot' => 'Bot',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dialogueType' => 'DialogueType',
        'taskId' => 'TaskId',
        'user' => 'User',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bot) {
            $res['Bot'] = $this->bot;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->dialogueType) {
            $res['DialogueType'] = $this->dialogueType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bot'])) {
            $model->bot = $map['Bot'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DialogueType'])) {
            $model->dialogueType = $map['DialogueType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
