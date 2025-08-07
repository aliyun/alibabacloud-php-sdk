<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\cssMetadata\componentsMappings;

class cssMetadata extends Model
{
    /**
     * @var componentsMappings[]
     */
    public $componentsMappings;
    protected $_name = [
        'componentsMappings' => 'ComponentsMappings',
    ];

    public function validate()
    {
        if (\is_array($this->componentsMappings)) {
            Model::validateArray($this->componentsMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentsMappings) {
            if (\is_array($this->componentsMappings)) {
                $res['ComponentsMappings'] = [];
                $n1 = 0;
                foreach ($this->componentsMappings as $item1) {
                    $res['ComponentsMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComponentsMappings'])) {
            if (!empty($map['ComponentsMappings'])) {
                $model->componentsMappings = [];
                $n1 = 0;
                foreach ($map['ComponentsMappings'] as $item1) {
                    $model->componentsMappings[$n1] = componentsMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
