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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\header;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload;
use AlibabaCloud\Tea\Model;

class RunVideoAnalysisResponseBody extends Model
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
     * @example 117F5ABE-CF02-5502-9A3F-E56BC9081A64
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'header' => 'header',
        'payload' => 'payload',
        'requestId' => 'requestId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunVideoAnalysisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }
        if (isset($map['payload'])) {
            $model->payload = payload::fromMap($map['payload']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
