<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody\qosPolicies\qosPolicy;

use AlibabaCloud\Dara\Model;

class dpiGroupIds extends Model
{
    /**
     * @var string[]
     */
    public $dpiGroupId;
    protected $_name = [
        'dpiGroupId' => 'DpiGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->dpiGroupId)) {
            Model::validateArray($this->dpiGroupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dpiGroupId) {
            if (\is_array($this->dpiGroupId)) {
                $res['DpiGroupId'] = [];
                $n1 = 0;
                foreach ($this->dpiGroupId as $item1) {
                    $res['DpiGroupId'][$n1] = $item1;
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
        if (isset($map['DpiGroupId'])) {
            if (!empty($map['DpiGroupId'])) {
                $model->dpiGroupId = [];
                $n1 = 0;
                foreach ($map['DpiGroupId'] as $item1) {
                    $model->dpiGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
