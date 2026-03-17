<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class IRIds extends Model
{
    /**
     * @var string[]
     */
    public $IRId;
    protected $_name = [
        'IRId' => 'IRId',
    ];

    public function validate()
    {
        if (\is_array($this->IRId)) {
            Model::validateArray($this->IRId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IRId) {
            if (\is_array($this->IRId)) {
                $res['IRId'] = [];
                $n1 = 0;
                foreach ($this->IRId as $item1) {
                    $res['IRId'][$n1] = $item1;
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
        if (isset($map['IRId'])) {
            if (!empty($map['IRId'])) {
                $model->IRId = [];
                $n1 = 0;
                foreach ($map['IRId'] as $item1) {
                    $model->IRId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
