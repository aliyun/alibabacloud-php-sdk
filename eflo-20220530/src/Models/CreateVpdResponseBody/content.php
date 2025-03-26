<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string[]
     */
    public $subnetIds;

    /**
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'subnetIds' => 'SubnetIds',
        'vpdId' => 'VpdId',
    ];

    public function validate()
    {
        if (\is_array($this->subnetIds)) {
            Model::validateArray($this->subnetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subnetIds) {
            if (\is_array($this->subnetIds)) {
                $res['SubnetIds'] = [];
                $n1 = 0;
                foreach ($this->subnetIds as $item1) {
                    $res['SubnetIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
        if (isset($map['SubnetIds'])) {
            if (!empty($map['SubnetIds'])) {
                $model->subnetIds = [];
                $n1 = 0;
                foreach ($map['SubnetIds'] as $item1) {
                    $model->subnetIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
