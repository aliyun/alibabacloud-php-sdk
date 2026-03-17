<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagVbrRelationsResponseBody\sagVbrRelations;

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
        'requestId' => 'RequestId',
        'sagVbrRelations' => 'SagVbrRelations',
    ];

    public function validate()
    {
        if (\is_array($this->sagVbrRelations)) {
            Model::validateArray($this->sagVbrRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sagVbrRelations) {
            if (\is_array($this->sagVbrRelations)) {
                $res['SagVbrRelations'] = [];
                $n1 = 0;
                foreach ($this->sagVbrRelations as $item1) {
                    $res['SagVbrRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SagVbrRelations'])) {
            if (!empty($map['SagVbrRelations'])) {
                $model->sagVbrRelations = [];
                $n1 = 0;
                foreach ($map['SagVbrRelations'] as $item1) {
                    $model->sagVbrRelations[$n1] = sagVbrRelations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
