<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayServiceVersionRequest\labels;
use AlibabaCloud\Tea\Model;

class UpdateGatewayServiceVersionRequest extends Model
{
    /**
     * @var labels[]
     */
    public $labels;
    protected $_name = [
        'labels' => 'labels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayServiceVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
