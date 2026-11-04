<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListContactFlowsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListContactFlowsResponseBody\contactFlows\contactFlow;

class contactFlows extends Model
{
    /**
     * @var contactFlow[]
     */
    public $contactFlow;
    protected $_name = [
        'contactFlow' => 'ContactFlow',
    ];

    public function validate()
    {
        if (\is_array($this->contactFlow)) {
            Model::validateArray($this->contactFlow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactFlow) {
            if (\is_array($this->contactFlow)) {
                $res['ContactFlow'] = [];
                $n1 = 0;
                foreach ($this->contactFlow as $item1) {
                    $res['ContactFlow'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ContactFlow'])) {
            if (!empty($map['ContactFlow'])) {
                $model->contactFlow = [];
                $n1 = 0;
                foreach ($map['ContactFlow'] as $item1) {
                    $model->contactFlow[$n1] = contactFlow::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
