<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadCcRouteFileForParseResponseBody\routeRules;
use AlibabaCloud\Tea\Model;

class UploadCcRouteFileForParseResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var routeRules[]
     */
    public $routeRules;
    protected $_name = [
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'promptInfo' => 'PromptInfo',
        'routeRules' => 'RouteRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->routeRules) {
            $res['RouteRules'] = [];
            if (null !== $this->routeRules && \is_array($this->routeRules)) {
                $n = 0;
                foreach ($this->routeRules as $item) {
                    $res['RouteRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCcRouteFileForParseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['RouteRules'])) {
            if (!empty($map['RouteRules'])) {
                $model->routeRules = [];
                $n                 = 0;
                foreach ($map['RouteRules'] as $item) {
                    $model->routeRules[$n++] = null !== $item ? routeRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
