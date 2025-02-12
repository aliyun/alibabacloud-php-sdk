<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponseBody\vpcAccessAttributes\vpcAccessAttribute;

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
        if (\is_array($this->vpcAccessAttribute)) {
            Model::validateArray($this->vpcAccessAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpcAccessAttribute) {
            if (\is_array($this->vpcAccessAttribute)) {
                $res['VpcAccessAttribute'] = [];
                $n1                        = 0;
                foreach ($this->vpcAccessAttribute as $item1) {
                    $res['VpcAccessAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VpcAccessAttribute'])) {
            if (!empty($map['VpcAccessAttribute'])) {
                $model->vpcAccessAttribute = [];
                $n1                        = 0;
                foreach ($map['VpcAccessAttribute'] as $item1) {
                    $model->vpcAccessAttribute[$n1++] = vpcAccessAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
