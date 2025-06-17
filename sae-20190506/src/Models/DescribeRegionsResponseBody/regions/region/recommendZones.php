<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponseBody\regions\region;

use AlibabaCloud\Dara\Model;

class recommendZones extends Model
{
    /**
     * @var string[]
     */
    public $recommendZone;
    protected $_name = [
        'recommendZone' => 'RecommendZone',
    ];

    public function validate()
    {
        if (\is_array($this->recommendZone)) {
            Model::validateArray($this->recommendZone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recommendZone) {
            if (\is_array($this->recommendZone)) {
                $res['RecommendZone'] = [];
                $n1 = 0;
                foreach ($this->recommendZone as $item1) {
                    $res['RecommendZone'][$n1] = $item1;
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
        if (isset($map['RecommendZone'])) {
            if (!empty($map['RecommendZone'])) {
                $model->recommendZone = [];
                $n1 = 0;
                foreach ($map['RecommendZone'] as $item1) {
                    $model->recommendZone[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
