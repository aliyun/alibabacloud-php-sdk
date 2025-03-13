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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data\conversationList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data\qualityCheckList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var conversationList
     */
    public $conversationList;

    /**
     * @example 2024-09-27 11:23:20
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-09-27 11:23:20
     *
     * @var string
     */
    public $gmtEnd;

    /**
     * @example 2024-09-27 11:23:20
     *
     * @var string
     */
    public $gmtStart;

    /**
     * @var qualityCheckList[]
     */
    public $qualityCheckList;

    /**
     * @example INIT
     *
     * @var string
     */
    public $status;

    /**
     * @example 1703557101831
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'conversationList' => 'conversationList',
        'gmtCreate' => 'gmtCreate',
        'gmtEnd' => 'gmtEnd',
        'gmtStart' => 'gmtStart',
        'qualityCheckList' => 'qualityCheckList',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationList) {
            $res['conversationList'] = null !== $this->conversationList ? $this->conversationList->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }
        if (null !== $this->qualityCheckList) {
            $res['qualityCheckList'] = [];
            if (null !== $this->qualityCheckList && \is_array($this->qualityCheckList)) {
                $n = 0;
                foreach ($this->qualityCheckList as $item) {
                    $res['qualityCheckList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['conversationList'])) {
            $model->conversationList = conversationList::fromMap($map['conversationList']);
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }
        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }
        if (isset($map['qualityCheckList'])) {
            if (!empty($map['qualityCheckList'])) {
                $model->qualityCheckList = [];
                $n = 0;
                foreach ($map['qualityCheckList'] as $item) {
                    $model->qualityCheckList[$n++] = null !== $item ? qualityCheckList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
