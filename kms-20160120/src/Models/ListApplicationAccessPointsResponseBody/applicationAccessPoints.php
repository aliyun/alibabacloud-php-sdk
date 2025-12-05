<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsResponseBody\applicationAccessPoints\applicationAccessPoint;

class applicationAccessPoints extends Model
{
    /**
     * @var applicationAccessPoint[]
     */
    public $applicationAccessPoint;
    protected $_name = [
        'applicationAccessPoint' => 'ApplicationAccessPoint',
    ];

    public function validate()
    {
        if (\is_array($this->applicationAccessPoint)) {
            Model::validateArray($this->applicationAccessPoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationAccessPoint) {
            if (\is_array($this->applicationAccessPoint)) {
                $res['ApplicationAccessPoint'] = [];
                $n1 = 0;
                foreach ($this->applicationAccessPoint as $item1) {
                    $res['ApplicationAccessPoint'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationAccessPoint'])) {
            if (!empty($map['ApplicationAccessPoint'])) {
                $model->applicationAccessPoint = [];
                $n1 = 0;
                foreach ($map['ApplicationAccessPoint'] as $item1) {
                    $model->applicationAccessPoint[$n1] = applicationAccessPoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
