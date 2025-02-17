<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponseBody\vpcs\vpc;

use AlibabaCloud\Dara\Model;

class userCidrs extends Model
{
    /**
     * @var string[]
     */
    public $userCidr;
    protected $_name = [
        'userCidr' => 'UserCidr',
    ];

    public function validate()
    {
        if (\is_array($this->userCidr)) {
            Model::validateArray($this->userCidr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userCidr) {
            if (\is_array($this->userCidr)) {
                $res['UserCidr'] = [];
                $n1              = 0;
                foreach ($this->userCidr as $item1) {
                    $res['UserCidr'][$n1++] = $item1;
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
        if (isset($map['UserCidr'])) {
            if (!empty($map['UserCidr'])) {
                $model->userCidr = [];
                $n1              = 0;
                foreach ($map['UserCidr'] as $item1) {
                    $model->userCidr[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
