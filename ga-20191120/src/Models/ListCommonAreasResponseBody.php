<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListCommonAreasResponseBody\areas;
use AlibabaCloud\Tea\Model;

class ListCommonAreasResponseBody extends Model
{
    /**
     * @description The information about the areas.
     *
     * @var areas[]
     */
    public $areas;

    /**
     * @description The ID of the request.
     *
     * @example DE77A7F3-3B74-41C0-A5BC-CAFD188C28B6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'areas'     => 'Areas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areas) {
            $res['Areas'] = [];
            if (null !== $this->areas && \is_array($this->areas)) {
                $n = 0;
                foreach ($this->areas as $item) {
                    $res['Areas'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListCommonAreasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Areas'])) {
            if (!empty($map['Areas'])) {
                $model->areas = [];
                $n            = 0;
                foreach ($map['Areas'] as $item) {
                    $model->areas[$n++] = null !== $item ? areas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
