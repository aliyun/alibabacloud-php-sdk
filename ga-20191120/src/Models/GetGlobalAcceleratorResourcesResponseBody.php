<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\GetGlobalAcceleratorResourcesResponseBody\associatedResources;

class GetGlobalAcceleratorResourcesResponseBody extends Model
{
    /**
     * @var associatedResources[]
     */
    public $associatedResources;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'associatedResources' => 'AssociatedResources',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->associatedResources)) {
            Model::validateArray($this->associatedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedResources) {
            if (\is_array($this->associatedResources)) {
                $res['AssociatedResources'] = [];
                $n1 = 0;
                foreach ($this->associatedResources as $item1) {
                    $res['AssociatedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AssociatedResources'])) {
            if (!empty($map['AssociatedResources'])) {
                $model->associatedResources = [];
                $n1 = 0;
                foreach ($map['AssociatedResources'] as $item1) {
                    $model->associatedResources[$n1] = associatedResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
