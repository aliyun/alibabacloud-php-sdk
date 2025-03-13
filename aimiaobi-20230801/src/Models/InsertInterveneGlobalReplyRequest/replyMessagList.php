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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyRequest;

use AlibabaCloud\Tea\Model;

class replyMessagList extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $replyType;
    protected $_name = [
        'message' => 'Message',
        'replyType' => 'ReplyType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->replyType) {
            $res['ReplyType'] = $this->replyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replyMessagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReplyType'])) {
            $model->replyType = $map['ReplyType'];
        }

        return $model;
    }
}
