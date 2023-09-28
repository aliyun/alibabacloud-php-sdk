<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponseBody\launchOptionSummaries;
use AlibabaCloud\Tea\Model;

class ListLaunchOptionsResponseBody extends Model
{
    /**
     * @description The launch options.
     *
     * @var launchOptionSummaries[]
     */
    public $launchOptionSummaries;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'launchOptionSummaries' => 'LaunchOptionSummaries',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchOptionSummaries) {
            $res['LaunchOptionSummaries'] = [];
            if (null !== $this->launchOptionSummaries && \is_array($this->launchOptionSummaries)) {
                $n = 0;
                foreach ($this->launchOptionSummaries as $item) {
                    $res['LaunchOptionSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLaunchOptionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchOptionSummaries'])) {
            if (!empty($map['LaunchOptionSummaries'])) {
                $model->launchOptionSummaries = [];
                $n                            = 0;
                foreach ($map['LaunchOptionSummaries'] as $item) {
                    $model->launchOptionSummaries[$n++] = null !== $item ? launchOptionSummaries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
