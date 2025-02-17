<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody\haVips\haVip;

use AlibabaCloud\Dara\Model;

class associatedEipAddresses extends Model
{
    /**
     * @var string[]
     */
    public $associatedEipAddresse;
    protected $_name = [
        'associatedEipAddresse' => 'associatedEipAddresse',
    ];

    public function validate()
    {
        if (\is_array($this->associatedEipAddresse)) {
            Model::validateArray($this->associatedEipAddresse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedEipAddresse) {
            if (\is_array($this->associatedEipAddresse)) {
                $res['associatedEipAddresse'] = [];
                $n1                           = 0;
                foreach ($this->associatedEipAddresse as $item1) {
                    $res['associatedEipAddresse'][$n1++] = $item1;
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
        if (isset($map['associatedEipAddresse'])) {
            if (!empty($map['associatedEipAddresse'])) {
                $model->associatedEipAddresse = [];
                $n1                           = 0;
                foreach ($map['associatedEipAddresse'] as $item1) {
                    $model->associatedEipAddresse[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
