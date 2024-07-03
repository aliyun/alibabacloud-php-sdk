<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponseBody\data\result\failedItems;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $sdgId;
    protected $_name = [
        'sdgId' => 'SdgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sdgId) {
            $res['SdgId'] = $this->sdgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SdgId'])) {
            $model->sdgId = $map['SdgId'];
        }

        return $model;
    }
}
