<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody\opLogDetails\opLogDetail;
use AlibabaCloud\Tea\Model;

class opLogDetails extends Model
{
    /**
     * @var opLogDetail[]
     */
    public $opLogDetail;
    protected $_name = [
        'opLogDetail' => 'OpLogDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opLogDetail) {
            $res['OpLogDetail'] = [];
            if (null !== $this->opLogDetail && \is_array($this->opLogDetail)) {
                $n = 0;
                foreach ($this->opLogDetail as $item) {
                    $res['OpLogDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return opLogDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpLogDetail'])) {
            if (!empty($map['OpLogDetail'])) {
                $model->opLogDetail = [];
                $n                  = 0;
                foreach ($map['OpLogDetail'] as $item) {
                    $model->opLogDetail[$n++] = null !== $item ? opLogDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
