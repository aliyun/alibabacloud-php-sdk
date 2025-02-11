<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancePlansModificationResponseBody\plans;

class ListInstancePlansModificationResponseBody extends Model
{
    /**
     * @var plans[]
     */
    public $plans;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'plans'     => 'Plans',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->plans)) {
            Model::validateArray($this->plans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->plans) {
            if (\is_array($this->plans)) {
                $res['Plans'] = [];
                $n1           = 0;
                foreach ($this->plans as $item1) {
                    $res['Plans'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Plans'])) {
            if (!empty($map['Plans'])) {
                $model->plans = [];
                $n1           = 0;
                foreach ($map['Plans'] as $item1) {
                    $model->plans[$n1++] = plans::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
