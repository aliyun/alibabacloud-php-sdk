<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedExecutorList\supportedExecutor;
use AlibabaCloud\Tea\Model;

class supportedExecutorList extends Model
{
    /**
     * @var supportedExecutor[]
     */
    public $supportedExecutor;
    protected $_name = [
        'supportedExecutor' => 'SupportedExecutor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedExecutor) {
            $res['SupportedExecutor'] = [];
            if (null !== $this->supportedExecutor && \is_array($this->supportedExecutor)) {
                $n = 0;
                foreach ($this->supportedExecutor as $item) {
                    $res['SupportedExecutor'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedExecutorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedExecutor'])) {
            if (!empty($map['SupportedExecutor'])) {
                $model->supportedExecutor = [];
                $n                        = 0;
                foreach ($map['SupportedExecutor'] as $item) {
                    $model->supportedExecutor[$n++] = null !== $item ? supportedExecutor::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
