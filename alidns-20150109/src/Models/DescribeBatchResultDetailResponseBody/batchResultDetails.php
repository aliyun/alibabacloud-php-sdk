<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponseBody\batchResultDetails\batchResultDetail;
use AlibabaCloud\Tea\Model;

class batchResultDetails extends Model
{
    /**
     * @var batchResultDetail[]
     */
    public $batchResultDetail;
    protected $_name = [
        'batchResultDetail' => 'BatchResultDetail',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchResultDetail) {
            $res['BatchResultDetail'] = [];
            if (null !== $this->batchResultDetail && \is_array($this->batchResultDetail)) {
                $n = 0;
                foreach ($this->batchResultDetail as $item) {
                    $res['BatchResultDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchResultDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchResultDetail'])) {
            if (!empty($map['BatchResultDetail'])) {
                $model->batchResultDetail = [];
                $n = 0;
                foreach ($map['BatchResultDetail'] as $item) {
                    $model->batchResultDetail[$n++] = null !== $item ? batchResultDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
