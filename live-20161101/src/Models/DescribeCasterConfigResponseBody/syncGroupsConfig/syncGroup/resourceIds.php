<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\syncGroupsConfig\syncGroup;

use AlibabaCloud\Dara\Model;

class resourceIds extends Model
{
    /**
     * @var string[]
     */
    public $resourceId;
    protected $_name = [
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        if (\is_array($this->resourceId)) {
            Model::validateArray($this->resourceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceId) {
            if (\is_array($this->resourceId)) {
                $res['ResourceId'] = [];
                $n1 = 0;
                foreach ($this->resourceId as $item1) {
                    $res['ResourceId'][$n1] = $item1;
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
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = [];
                $n1 = 0;
                foreach ($map['ResourceId'] as $item1) {
                    $model->resourceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
