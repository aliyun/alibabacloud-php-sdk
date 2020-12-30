<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListContactFlowsResponseBody\contactFlows\contactFlow;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListContactFlowsResponseBody\contactFlows\contactFlow\versions\contactFlowVersion;
use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var contactFlowVersion[]
     */
    public $contactFlowVersion;
    protected $_name = [
        'contactFlowVersion' => 'ContactFlowVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlowVersion) {
            $res['ContactFlowVersion'] = [];
            if (null !== $this->contactFlowVersion && \is_array($this->contactFlowVersion)) {
                $n = 0;
                foreach ($this->contactFlowVersion as $item) {
                    $res['ContactFlowVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowVersion'])) {
            if (!empty($map['ContactFlowVersion'])) {
                $model->contactFlowVersion = [];
                $n                         = 0;
                foreach ($map['ContactFlowVersion'] as $item) {
                    $model->contactFlowVersion[$n++] = null !== $item ? contactFlowVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
