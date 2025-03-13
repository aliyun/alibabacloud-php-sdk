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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data\functionCallResponses;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data\response;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var functionCallResponses[]
     */
    public $functionCallResponses;

    /**
     * @example 766
     *
     * @var int
     */
    public $inputTokens;

    /**
     * @example 988
     *
     * @var int
     */
    public $outputTokens;

    /**
     * @var response
     */
    public $response;

    /**
     * @example 4vlag5ken3
     *
     * @var string
     */
    public $threadId;

    /**
     * @example 5bdb9809856c58acb92001f8ae65773c
     *
     * @var string
     */
    public $traceId;

    /**
     * @example w4paqoezm2
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'functionCallResponses' => 'functionCallResponses',
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'response' => 'response',
        'threadId' => 'threadId',
        'traceId' => 'traceId',
        'versionId' => 'versionId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionCallResponses) {
            $res['functionCallResponses'] = [];
            if (null !== $this->functionCallResponses && \is_array($this->functionCallResponses)) {
                $n = 0;
                foreach ($this->functionCallResponses as $item) {
                    $res['functionCallResponses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }
        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }
        if (null !== $this->response) {
            $res['response'] = null !== $this->response ? $this->response->toMap() : null;
        }
        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['functionCallResponses'])) {
            if (!empty($map['functionCallResponses'])) {
                $model->functionCallResponses = [];
                $n = 0;
                foreach ($map['functionCallResponses'] as $item) {
                    $model->functionCallResponses[$n++] = null !== $item ? functionCallResponses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }
        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }
        if (isset($map['response'])) {
            $model->response = response::fromMap($map['response']);
        }
        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
