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

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationExtractResponseBody\header;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationExtractResponseBody\payload;
use AlibabaCloud\Tea\Model;

class RunMarketingInformationExtractResponseBody extends Model
{
    /**
     * @example {\\"TimeZone\\": \\"Asia/Shanghai\\", \\"DateTime\\": \\"2024-03-07T17:00:09+08:00\\"}
     *
     * @var bool
     */
    public $end;

    /**
     * @var header
     */
    public $header;

    /**
     * @var payload
     */
    public $payload;
    protected $_name = [
        'end' => 'end',
        'header' => 'header',
        'payload' => 'payload',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->header) {
            $res['header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunMarketingInformationExtractResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }
        if (isset($map['payload'])) {
            $model->payload = payload::fromMap($map['payload']);
        }

        return $model;
    }
}
