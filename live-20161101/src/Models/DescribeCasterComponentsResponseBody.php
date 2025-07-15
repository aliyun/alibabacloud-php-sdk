<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components;
use AlibabaCloud\Tea\Model;

class DescribeCasterComponentsResponseBody extends Model
{
    /**
     * @description The components.
     *
     * @var components
     */
    public $components;

    /**
     * @description The request ID.
     *
     * @example 3be7ade8-d907-483c-b24a-0dad45******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries.
     *
     * @example 3
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'components' => 'Components',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->components) {
            $res['Components'] = null !== $this->components ? $this->components->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterComponentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Components'])) {
            $model->components = components::fromMap($map['Components']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
