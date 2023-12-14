<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayModificationClassesResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayModificationClassesResponseBody\targetGatewayClasses\targetGatewayClass;
use AlibabaCloud\Tea\Model;

class targetGatewayClasses extends Model
{
    /**
     * @var targetGatewayClass[]
     */
    public $targetGatewayClass;
    protected $_name = [
        'targetGatewayClass' => 'TargetGatewayClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetGatewayClass) {
            $res['TargetGatewayClass'] = [];
            if (null !== $this->targetGatewayClass && \is_array($this->targetGatewayClass)) {
                $n = 0;
                foreach ($this->targetGatewayClass as $item) {
                    $res['TargetGatewayClass'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetGatewayClasses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetGatewayClass'])) {
            if (!empty($map['TargetGatewayClass'])) {
                $model->targetGatewayClass = [];
                $n                         = 0;
                foreach ($map['TargetGatewayClass'] as $item) {
                    $model->targetGatewayClass[$n++] = null !== $item ? targetGatewayClass::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
