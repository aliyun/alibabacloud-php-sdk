<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponseBody\videoResources\videoResource;

class videoResources extends Model
{
    /**
     * @var videoResource[]
     */
    public $videoResource;
    protected $_name = [
        'videoResource' => 'VideoResource',
    ];

    public function validate()
    {
        if (\is_array($this->videoResource)) {
            Model::validateArray($this->videoResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoResource) {
            if (\is_array($this->videoResource)) {
                $res['VideoResource'] = [];
                $n1 = 0;
                foreach ($this->videoResource as $item1) {
                    $res['VideoResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VideoResource'])) {
            if (!empty($map['VideoResource'])) {
                $model->videoResource = [];
                $n1 = 0;
                foreach ($map['VideoResource'] as $item1) {
                    $model->videoResource[$n1] = videoResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
