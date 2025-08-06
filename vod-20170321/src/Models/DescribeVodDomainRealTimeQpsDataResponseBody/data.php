<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeQpsDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeQpsDataResponseBody\data\qpsModel;

class data extends Model
{
    /**
     * @var qpsModel[]
     */
    public $qpsModel;
    protected $_name = [
        'qpsModel' => 'QpsModel',
    ];

    public function validate()
    {
        if (\is_array($this->qpsModel)) {
            Model::validateArray($this->qpsModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qpsModel) {
            if (\is_array($this->qpsModel)) {
                $res['QpsModel'] = [];
                $n1 = 0;
                foreach ($this->qpsModel as $item1) {
                    $res['QpsModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QpsModel'])) {
            if (!empty($map['QpsModel'])) {
                $model->qpsModel = [];
                $n1 = 0;
                foreach ($map['QpsModel'] as $item1) {
                    $model->qpsModel[$n1] = qpsModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
