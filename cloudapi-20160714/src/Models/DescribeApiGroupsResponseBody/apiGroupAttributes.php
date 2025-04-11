<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponseBody\apiGroupAttributes\apiGroupAttribute;

class apiGroupAttributes extends Model
{
    /**
     * @var apiGroupAttribute[]
     */
    public $apiGroupAttribute;
    protected $_name = [
        'apiGroupAttribute' => 'ApiGroupAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->apiGroupAttribute)) {
            Model::validateArray($this->apiGroupAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiGroupAttribute) {
            if (\is_array($this->apiGroupAttribute)) {
                $res['ApiGroupAttribute'] = [];
                $n1 = 0;
                foreach ($this->apiGroupAttribute as $item1) {
                    $res['ApiGroupAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiGroupAttribute'])) {
            if (!empty($map['ApiGroupAttribute'])) {
                $model->apiGroupAttribute = [];
                $n1 = 0;
                foreach ($map['ApiGroupAttribute'] as $item1) {
                    $model->apiGroupAttribute[$n1++] = apiGroupAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
