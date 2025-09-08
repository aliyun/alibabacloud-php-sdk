<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListTagResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListTagResourcesResponseBody\data\tagResources;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var tagResources[]
     */
    public $tagResources;
    protected $_name = [
        'nextToken' => 'NextToken',
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->tagResources) {
            if (\is_array($this->tagResources)) {
                $res['TagResources'] = [];
                $n1 = 0;
                foreach ($this->tagResources as $item1) {
                    $res['TagResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['TagResources'])) {
            if (!empty($map['TagResources'])) {
                $model->tagResources = [];
                $n1 = 0;
                foreach ($map['TagResources'] as $item1) {
                    $model->tagResources[$n1] = tagResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
