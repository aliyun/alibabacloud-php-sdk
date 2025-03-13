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

use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDocsSummaryTaskRequest\docInfos;
use AlibabaCloud\Tea\Model;

class CreateDocsSummaryTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var docInfos[]
     */
    public $docInfos;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableTable;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @description This parameter is required.
     *
     * @example qwen-plus
     *
     * @var string
     */
    public $modelId;
    protected $_name = [
        'docInfos' => 'docInfos',
        'enableTable' => 'enableTable',
        'instruction' => 'instruction',
        'modelId' => 'modelId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docInfos) {
            $res['docInfos'] = [];
            if (null !== $this->docInfos && \is_array($this->docInfos)) {
                $n = 0;
                foreach ($this->docInfos as $item) {
                    $res['docInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableTable) {
            $res['enableTable'] = $this->enableTable;
        }
        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDocsSummaryTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docInfos'])) {
            if (!empty($map['docInfos'])) {
                $model->docInfos = [];
                $n = 0;
                foreach ($map['docInfos'] as $item) {
                    $model->docInfos[$n++] = null !== $item ? docInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['enableTable'])) {
            $model->enableTable = $map['enableTable'];
        }
        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        return $model;
    }
}
