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

class SubmitTopicSelectionPerspectiveAnalysisTaskShrinkRequest extends Model
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
     * @var string
     */
    public $documentsShrink;

    /**
     * @example TimedViewPoints
     *
     * @var string
     */
    public $perspectiveTypesShrink;

    /**
     * @example 待分析的主题名（documents与topic二者至少传一个）
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'documentsShrink' => 'Documents',
        'perspectiveTypesShrink' => 'PerspectiveTypes',
        'topic' => 'Topic',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->documentsShrink) {
            $res['Documents'] = $this->documentsShrink;
        }
        if (null !== $this->perspectiveTypesShrink) {
            $res['PerspectiveTypes'] = $this->perspectiveTypesShrink;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTopicSelectionPerspectiveAnalysisTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Documents'])) {
            $model->documentsShrink = $map['Documents'];
        }
        if (isset($map['PerspectiveTypes'])) {
            $model->perspectiveTypesShrink = $map['PerspectiveTypes'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
