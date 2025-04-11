<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class sourceChildInstanceTypes extends Model
{
    /**
     * @var string[]
     */
    public $sourceChildInstanceType;
    protected $_name = [
        'sourceChildInstanceType' => 'SourceChildInstanceType',
    ];

    public function validate()
    {
        if (\is_array($this->sourceChildInstanceType)) {
            Model::validateArray($this->sourceChildInstanceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceChildInstanceType) {
            if (\is_array($this->sourceChildInstanceType)) {
                $res['SourceChildInstanceType'] = [];
                $n1 = 0;
                foreach ($this->sourceChildInstanceType as $item1) {
                    $res['SourceChildInstanceType'][$n1++] = $item1;
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
        if (isset($map['SourceChildInstanceType'])) {
            if (!empty($map['SourceChildInstanceType'])) {
                $model->sourceChildInstanceType = [];
                $n1 = 0;
                foreach ($map['SourceChildInstanceType'] as $item1) {
                    $model->sourceChildInstanceType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
