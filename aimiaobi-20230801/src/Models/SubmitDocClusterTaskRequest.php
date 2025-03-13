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

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDocClusterTaskRequest\documents;
use AlibabaCloud\Tea\Model;

class SubmitDocClusterTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @var documents[]
     */
    public $documents;

    /**
     * @example 49
     *
     * @var int
     */
    public $summaryLength;

    /**
     * @example 69
     *
     * @var int
     */
    public $titleLength;

    /**
     * @example 15
     *
     * @var int
     */
    public $topicCount;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'documents' => 'Documents',
        'summaryLength' => 'SummaryLength',
        'titleLength' => 'TitleLength',
        'topicCount' => 'TopicCount',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->documents) {
            $res['Documents'] = [];
            if (null !== $this->documents && \is_array($this->documents)) {
                $n = 0;
                foreach ($this->documents as $item) {
                    $res['Documents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summaryLength) {
            $res['SummaryLength'] = $this->summaryLength;
        }
        if (null !== $this->titleLength) {
            $res['TitleLength'] = $this->titleLength;
        }
        if (null !== $this->topicCount) {
            $res['TopicCount'] = $this->topicCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDocClusterTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n = 0;
                foreach ($map['Documents'] as $item) {
                    $model->documents[$n++] = null !== $item ? documents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SummaryLength'])) {
            $model->summaryLength = $map['SummaryLength'];
        }
        if (isset($map['TitleLength'])) {
            $model->titleLength = $map['TitleLength'];
        }
        if (isset($map['TopicCount'])) {
            $model->topicCount = $map['TopicCount'];
        }

        return $model;
    }
}
