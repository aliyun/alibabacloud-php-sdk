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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody\data\taskInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var taskInfoList[]
     */
    public $taskInfoList;
    protected $_name = [
        'taskInfoList' => 'TaskInfoList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskInfoList) {
            $res['TaskInfoList'] = [];
            if (null !== $this->taskInfoList && \is_array($this->taskInfoList)) {
                $n = 0;
                foreach ($this->taskInfoList as $item) {
                    $res['TaskInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TaskInfoList'])) {
            if (!empty($map['TaskInfoList'])) {
                $model->taskInfoList = [];
                $n = 0;
                foreach ($map['TaskInfoList'] as $item) {
                    $model->taskInfoList[$n++] = null !== $item ? taskInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
