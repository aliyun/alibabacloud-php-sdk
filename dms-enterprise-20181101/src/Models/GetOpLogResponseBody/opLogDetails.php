<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody\opLogDetails\opLogDetail;

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
        if (\is_array($this->opLogDetail)) {
            Model::validateArray($this->opLogDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opLogDetail) {
            if (\is_array($this->opLogDetail)) {
                $res['OpLogDetail'] = [];
                $n1 = 0;
                foreach ($this->opLogDetail as $item1) {
                    $res['OpLogDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OpLogDetail'])) {
            if (!empty($map['OpLogDetail'])) {
                $model->opLogDetail = [];
                $n1 = 0;
                foreach ($map['OpLogDetail'] as $item1) {
                    $model->opLogDetail[$n1] = opLogDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
