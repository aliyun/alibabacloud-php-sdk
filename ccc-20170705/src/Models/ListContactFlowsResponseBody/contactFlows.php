<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListContactFlowsResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListContactFlowsResponseBody\contactFlows\contactFlow;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlow) {
            $res['ContactFlow'] = [];
            if (null !== $this->contactFlow && \is_array($this->contactFlow)) {
                $n = 0;
                foreach ($this->contactFlow as $item) {
                    $res['ContactFlow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactFlows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlow'])) {
            if (!empty($map['ContactFlow'])) {
                $model->contactFlow = [];
                $n                  = 0;
                foreach ($map['ContactFlow'] as $item) {
                    $model->contactFlow[$n++] = null !== $item ? contactFlow::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
