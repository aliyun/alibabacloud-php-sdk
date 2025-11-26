<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponseBody;

use AlibabaCloud\Dara\Model;

class distInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $distInstanceId;
    protected $_name = [
        'distInstanceId' => 'DistInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->distInstanceId)) {
            Model::validateArray($this->distInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distInstanceId) {
            if (\is_array($this->distInstanceId)) {
                $res['DistInstanceId'] = [];
                $n1 = 0;
                foreach ($this->distInstanceId as $item1) {
                    $res['DistInstanceId'][$n1] = $item1;
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
        if (isset($map['DistInstanceId'])) {
            if (!empty($map['DistInstanceId'])) {
                $model->distInstanceId = [];
                $n1 = 0;
                foreach ($map['DistInstanceId'] as $item1) {
                    $model->distInstanceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
