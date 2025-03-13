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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskRequest;

use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskRequest\conversationList\dialogueList;
use AlibabaCloud\Tea\Model;

class conversationList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var dialogueList[]
     */
    public $dialogueList;
    protected $_name = [
        'dialogueList' => 'dialogueList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogueList) {
            $res['dialogueList'] = [];
            if (null !== $this->dialogueList && \is_array($this->dialogueList)) {
                $n = 0;
                foreach ($this->dialogueList as $item) {
                    $res['dialogueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dialogueList'])) {
            if (!empty($map['dialogueList'])) {
                $model->dialogueList = [];
                $n = 0;
                foreach ($map['dialogueList'] as $item) {
                    $model->dialogueList[$n++] = null !== $item ? dialogueList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
