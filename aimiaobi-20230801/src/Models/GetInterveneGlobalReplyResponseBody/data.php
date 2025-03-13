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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneGlobalReplyResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneGlobalReplyResponseBody\data\replyMessagList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var replyMessagList[]
     */
    public $replyMessagList;
    protected $_name = [
        'replyMessagList' => 'ReplyMessagList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->replyMessagList) {
            $res['ReplyMessagList'] = [];
            if (null !== $this->replyMessagList && \is_array($this->replyMessagList)) {
                $n = 0;
                foreach ($this->replyMessagList as $item) {
                    $res['ReplyMessagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ReplyMessagList'])) {
            if (!empty($map['ReplyMessagList'])) {
                $model->replyMessagList = [];
                $n = 0;
                foreach ($map['ReplyMessagList'] as $item) {
                    $model->replyMessagList[$n++] = null !== $item ? replyMessagList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
