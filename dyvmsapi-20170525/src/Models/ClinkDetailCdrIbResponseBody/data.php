<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDetailCdrIbResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDetailCdrIbResponseBody\data\cdrIbDetail;

class data extends Model
{
    /**
     * @var cdrIbDetail[]
     */
    public $cdrIbDetail;

    /**
     * @var string
     */
    public $clinkRequestId;
    protected $_name = [
        'cdrIbDetail' => 'CdrIbDetail',
        'clinkRequestId' => 'ClinkRequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cdrIbDetail)) {
            Model::validateArray($this->cdrIbDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdrIbDetail) {
            if (\is_array($this->cdrIbDetail)) {
                $res['CdrIbDetail'] = [];
                $n1 = 0;
                foreach ($this->cdrIbDetail as $item1) {
                    $res['CdrIbDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
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
        if (isset($map['CdrIbDetail'])) {
            if (!empty($map['CdrIbDetail'])) {
                $model->cdrIbDetail = [];
                $n1 = 0;
                foreach ($map['CdrIbDetail'] as $item1) {
                    $model->cdrIbDetail[$n1] = cdrIbDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        return $model;
    }
}
