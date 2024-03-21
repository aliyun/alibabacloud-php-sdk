<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class flags extends Model
{
    /**
     * @var int[]
     */
    public $flag;
    protected $_name = [
        'flag' => 'Flag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            if (!empty($map['Flag'])) {
                $model->flag = $map['Flag'];
            }
        }

        return $model;
    }
}
