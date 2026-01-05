<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlanApproversResponseBody\approvers;

class ListProvisionedProductPlanApproversResponseBody extends Model
{
    /**
     * @var approvers[]
     */
    public $approvers;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'approvers' => 'Approvers',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->approvers)) {
            Model::validateArray($this->approvers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvers) {
            if (\is_array($this->approvers)) {
                $res['Approvers'] = [];
                $n1 = 0;
                foreach ($this->approvers as $item1) {
                    $res['Approvers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Approvers'])) {
            if (!empty($map['Approvers'])) {
                $model->approvers = [];
                $n1 = 0;
                foreach ($map['Approvers'] as $item1) {
                    $model->approvers[$n1] = approvers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
