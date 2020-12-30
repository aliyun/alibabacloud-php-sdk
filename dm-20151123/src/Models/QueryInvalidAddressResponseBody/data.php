<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryInvalidAddressResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\QueryInvalidAddressResponseBody\data\mailDetail;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mailDetail[]
     */
    public $mailDetail;
    protected $_name = [
        'mailDetail' => 'mailDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mailDetail) {
            $res['mailDetail'] = [];
            if (null !== $this->mailDetail && \is_array($this->mailDetail)) {
                $n = 0;
                foreach ($this->mailDetail as $item) {
                    $res['mailDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mailDetail'])) {
            if (!empty($map['mailDetail'])) {
                $model->mailDetail = [];
                $n                 = 0;
                foreach ($map['mailDetail'] as $item) {
                    $model->mailDetail[$n++] = null !== $item ? mailDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
