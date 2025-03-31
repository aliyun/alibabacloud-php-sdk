<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusResponseBody\appStatus;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var string[]
     */
    public $region;
    protected $_name = [
        'region' => 'Region',
    ];

    public function validate()
    {
        if (\is_array($this->region)) {
            Model::validateArray($this->region);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->region) {
            if (\is_array($this->region)) {
                $res['Region'] = [];
                $n1 = 0;
                foreach ($this->region as $item1) {
                    $res['Region'][$n1++] = $item1;
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
        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = [];
                $n1 = 0;
                foreach ($map['Region'] as $item1) {
                    $model->region[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
