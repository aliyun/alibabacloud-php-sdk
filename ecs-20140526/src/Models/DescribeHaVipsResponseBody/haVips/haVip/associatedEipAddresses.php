<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody\haVips\haVip;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedEipAddresse) {
            $res['associatedEipAddresse'] = $this->associatedEipAddresse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedEipAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['associatedEipAddresse'])) {
            if (!empty($map['associatedEipAddresse'])) {
                $model->associatedEipAddresse = $map['associatedEipAddresse'];
            }
        }

        return $model;
    }
}
