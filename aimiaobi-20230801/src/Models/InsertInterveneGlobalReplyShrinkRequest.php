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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class InsertInterveneGlobalReplyShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxx_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $replyMessagListShrink;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'replyMessagListShrink' => 'ReplyMessagList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->replyMessagListShrink) {
            $res['ReplyMessagList'] = $this->replyMessagListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertInterveneGlobalReplyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ReplyMessagList'])) {
            $model->replyMessagListShrink = $map['ReplyMessagList'];
        }

        return $model;
    }
}
