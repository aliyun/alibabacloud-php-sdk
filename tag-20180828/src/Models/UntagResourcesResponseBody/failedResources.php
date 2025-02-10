<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponseBody\failedResources\failedResource;

class failedResources extends Model
{
    /**
     * @var failedResource[]
     */
    public $failedResource;
    protected $_name = [
        'failedResource' => 'FailedResource',
    ];

    public function validate()
    {
        if (\is_array($this->failedResource)) {
            Model::validateArray($this->failedResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedResource) {
            if (\is_array($this->failedResource)) {
                $res['FailedResource'] = [];
                $n1                    = 0;
                foreach ($this->failedResource as $item1) {
                    $res['FailedResource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedResource'])) {
            if (!empty($map['FailedResource'])) {
                $model->failedResource = [];
                $n1                    = 0;
                foreach ($map['FailedResource'] as $item1) {
                    $model->failedResource[$n1++] = failedResource::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
