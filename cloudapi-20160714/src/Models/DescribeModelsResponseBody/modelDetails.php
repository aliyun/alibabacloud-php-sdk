<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody\modelDetails\modelDetail;

class modelDetails extends Model
{
    /**
     * @var modelDetail[]
     */
    public $modelDetail;
    protected $_name = [
        'modelDetail' => 'ModelDetail',
    ];

    public function validate()
    {
        if (\is_array($this->modelDetail)) {
            Model::validateArray($this->modelDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelDetail) {
            if (\is_array($this->modelDetail)) {
                $res['ModelDetail'] = [];
                $n1 = 0;
                foreach ($this->modelDetail as $item1) {
                    $res['ModelDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ModelDetail'])) {
            if (!empty($map['ModelDetail'])) {
                $model->modelDetail = [];
                $n1 = 0;
                foreach ($map['ModelDetail'] as $item1) {
                    $model->modelDetail[$n1] = modelDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
