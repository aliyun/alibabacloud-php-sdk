<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource;

use AlibabaCloud\Dara\Model;

class bandwidthTypes extends Model
{
    /**
     * @var string[]
     */
    public $bandwidthType;
    protected $_name = [
        'bandwidthType' => 'BandwidthType',
    ];

    public function validate()
    {
        if (\is_array($this->bandwidthType)) {
            Model::validateArray($this->bandwidthType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthType) {
            if (\is_array($this->bandwidthType)) {
                $res['BandwidthType'] = [];
                $n1 = 0;
                foreach ($this->bandwidthType as $item1) {
                    $res['BandwidthType'][$n1] = $item1;
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
        if (isset($map['BandwidthType'])) {
            if (!empty($map['BandwidthType'])) {
                $model->bandwidthType = [];
                $n1 = 0;
                foreach ($map['BandwidthType'] as $item1) {
                    $model->bandwidthType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
