<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagVbrRelationsResponseBody\sagVbrRelations;
use AlibabaCloud\Tea\Model;

class DescribeSagVbrRelationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sagVbrRelations[]
     */
    public $sagVbrRelations;
    protected $_name = [
        'requestId'       => 'RequestId',
        'sagVbrRelations' => 'SagVbrRelations',
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
        if (null !== $this->sagVbrRelations) {
            $res['SagVbrRelations'] = [];
            if (null !== $this->sagVbrRelations && \is_array($this->sagVbrRelations)) {
                $n = 0;
                foreach ($this->sagVbrRelations as $item) {
                    $res['SagVbrRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagVbrRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SagVbrRelations'])) {
            if (!empty($map['SagVbrRelations'])) {
                $model->sagVbrRelations = [];
                $n                      = 0;
                foreach ($map['SagVbrRelations'] as $item) {
                    $model->sagVbrRelations[$n++] = null !== $item ? sagVbrRelations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
