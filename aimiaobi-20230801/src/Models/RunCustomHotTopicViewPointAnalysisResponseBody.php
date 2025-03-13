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

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicViewPointAnalysisResponseBody\header;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicViewPointAnalysisResponseBody\payload;
use AlibabaCloud\Tea\Model;

class RunCustomHotTopicViewPointAnalysisResponseBody extends Model
{
    /**
     * @var header
     */
    public $header;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'header' => 'Header',
        'payload' => 'Payload',
        'requestId' => 'RequestId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCustomHotTopicViewPointAnalysisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Header'])) {
            $model->header = header::fromMap($map['Header']);
        }
        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
