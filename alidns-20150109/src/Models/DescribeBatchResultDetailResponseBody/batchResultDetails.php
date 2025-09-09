<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponseBody\batchResultDetails\batchResultDetail;

class batchResultDetails extends Model
{
    /**
     * @var batchResultDetail[]
     */
    public $batchResultDetail;
    protected $_name = [
        'batchResultDetail' => 'BatchResultDetail',
    ];

    public function validate()
    {
        if (\is_array($this->batchResultDetail)) {
            Model::validateArray($this->batchResultDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchResultDetail) {
            if (\is_array($this->batchResultDetail)) {
                $res['BatchResultDetail'] = [];
                $n1 = 0;
                foreach ($this->batchResultDetail as $item1) {
                    $res['BatchResultDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BatchResultDetail'])) {
            if (!empty($map['BatchResultDetail'])) {
                $model->batchResultDetail = [];
                $n1 = 0;
                foreach ($map['BatchResultDetail'] as $item1) {
                    $model->batchResultDetail[$n1] = batchResultDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
