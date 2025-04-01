<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantTagsResponseBody\tagResources;

class DescribeTenantTagsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagResources[]
     */
    public $tagResources;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagResources' => 'TagResources',
    ];

    public function validate()
    {
        if (\is_array($this->tagResources)) {
            Model::validateArray($this->tagResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tagResources) {
            if (\is_array($this->tagResources)) {
                $res['TagResources'] = [];
                $n1 = 0;
                foreach ($this->tagResources as $item1) {
                    $res['TagResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TagResources'])) {
            if (!empty($map['TagResources'])) {
                $model->tagResources = [];
                $n1 = 0;
                foreach ($map['TagResources'] as $item1) {
                    $model->tagResources[$n1++] = tagResources::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
