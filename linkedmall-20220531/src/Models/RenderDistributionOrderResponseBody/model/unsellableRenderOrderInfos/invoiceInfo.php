<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponseBody\model\unsellableRenderOrderInfos;

use AlibabaCloud\Tea\Model;

class invoiceInfo extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'desc' => 'Desc',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invoiceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
