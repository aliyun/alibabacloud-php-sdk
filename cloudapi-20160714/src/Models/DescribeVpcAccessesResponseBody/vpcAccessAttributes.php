<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponseBody\vpcAccessAttributes\vpcAccessAttribute;
use AlibabaCloud\Tea\Model;

class vpcAccessAttributes extends Model
{
    /**
     * @var vpcAccessAttribute[]
     */
    public $vpcAccessAttribute;
    protected $_name = [
        'vpcAccessAttribute' => 'VpcAccessAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcAccessAttribute) {
            $res['VpcAccessAttribute'] = [];
            if (null !== $this->vpcAccessAttribute && \is_array($this->vpcAccessAttribute)) {
                $n = 0;
                foreach ($this->vpcAccessAttribute as $item) {
                    $res['VpcAccessAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcAccessAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcAccessAttribute'])) {
            if (!empty($map['VpcAccessAttribute'])) {
                $model->vpcAccessAttribute = [];
                $n                         = 0;
                foreach ($map['VpcAccessAttribute'] as $item) {
                    $model->vpcAccessAttribute[$n++] = null !== $item ? vpcAccessAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
