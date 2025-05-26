<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamResponseBody\data\mailDetail;

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
        if (\is_array($this->mailDetail)) {
            Model::validateArray($this->mailDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mailDetail) {
            if (\is_array($this->mailDetail)) {
                $res['mailDetail'] = [];
                $n1 = 0;
                foreach ($this->mailDetail as $item1) {
                    $res['mailDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['mailDetail'])) {
            if (!empty($map['mailDetail'])) {
                $model->mailDetail = [];
                $n1 = 0;
                foreach ($map['mailDetail'] as $item1) {
                    $model->mailDetail[$n1++] = mailDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
