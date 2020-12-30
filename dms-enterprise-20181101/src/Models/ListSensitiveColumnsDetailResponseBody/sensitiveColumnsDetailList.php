<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsDetailResponseBody\sensitiveColumnsDetailList\sensitiveColumnsDetail;
use AlibabaCloud\Tea\Model;

class sensitiveColumnsDetailList extends Model
{
    /**
     * @var sensitiveColumnsDetail[]
     */
    public $sensitiveColumnsDetail;
    protected $_name = [
        'sensitiveColumnsDetail' => 'SensitiveColumnsDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitiveColumnsDetail) {
            $res['SensitiveColumnsDetail'] = [];
            if (null !== $this->sensitiveColumnsDetail && \is_array($this->sensitiveColumnsDetail)) {
                $n = 0;
                foreach ($this->sensitiveColumnsDetail as $item) {
                    $res['SensitiveColumnsDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveColumnsDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SensitiveColumnsDetail'])) {
            if (!empty($map['SensitiveColumnsDetail'])) {
                $model->sensitiveColumnsDetail = [];
                $n                             = 0;
                foreach ($map['SensitiveColumnsDetail'] as $item) {
                    $model->sensitiveColumnsDetail[$n++] = null !== $item ? sensitiveColumnsDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
