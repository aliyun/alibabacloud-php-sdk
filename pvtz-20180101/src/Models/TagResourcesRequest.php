<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\TagResourcesRequest\tag;

class TagResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $overWrite;

    /**
     * @var string[]
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'lang' => 'Lang',
        'overWrite' => 'OverWrite',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->resourceId)) {
            Model::validateArray($this->resourceId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->overWrite) {
            $res['OverWrite'] = $this->overWrite;
        }

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

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['OverWrite'])) {
            $model->overWrite = $map['OverWrite'];
        }

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

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
