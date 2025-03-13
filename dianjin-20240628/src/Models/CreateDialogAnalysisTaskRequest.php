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

use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskRequest\conversationList;
use AlibabaCloud\Tea\Model;

class CreateDialogAnalysisTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $analysisNodes;

    /**
     * @description This parameter is required.
     *
     * @var conversationList[]
     */
    public $conversationList;

    /**
     * @example {
     * "labels": "XXX",
     * "summaryConstraints": "XXX",
     * "sopInfo": "XXX"
     * }
     *
     * @var mixed[]
     */
    public $metaData;

    /**
     * @description This parameter is required.
     *
     * @example common
     *
     * @var string
     */
    public $playCode;

    /**
     * @description This parameter is required.
     *
     * @example 0FC6636E-380A-5369-AE01-D1C15BB9B254
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'analysisNodes' => 'analysisNodes',
        'conversationList' => 'conversationList',
        'metaData' => 'metaData',
        'playCode' => 'playCode',
        'requestId' => 'requestId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisNodes) {
            $res['analysisNodes'] = $this->analysisNodes;
        }
        if (null !== $this->conversationList) {
            $res['conversationList'] = [];
            if (null !== $this->conversationList && \is_array($this->conversationList)) {
                $n = 0;
                foreach ($this->conversationList as $item) {
                    $res['conversationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metaData) {
            $res['metaData'] = $this->metaData;
        }
        if (null !== $this->playCode) {
            $res['playCode'] = $this->playCode;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDialogAnalysisTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysisNodes'])) {
            if (!empty($map['analysisNodes'])) {
                $model->analysisNodes = $map['analysisNodes'];
            }
        }
        if (isset($map['conversationList'])) {
            if (!empty($map['conversationList'])) {
                $model->conversationList = [];
                $n = 0;
                foreach ($map['conversationList'] as $item) {
                    $model->conversationList[$n++] = null !== $item ? conversationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['metaData'])) {
            $model->metaData = $map['metaData'];
        }
        if (isset($map['playCode'])) {
            $model->playCode = $map['playCode'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
