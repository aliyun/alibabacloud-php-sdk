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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeEndpointsResponseBody extends Model
{
    /**
     * @description The returned result.
     *
     * @var data
     */
    public $data;

    /**
     * @description The request ID.
     *
     * @example xxx-xxx-xxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
