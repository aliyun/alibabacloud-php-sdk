<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceDetailResponseBody;

use AlibabaCloud\Tea\Model;

class flags extends Model
{
    /**
     * @var string[]
     */
    public $flags;
    protected $_name = [
        'flags' => 'Flags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flags) {
            $res['Flags'] = $this->flags;
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
        if (isset($map['Flags'])) {
            if (!empty($map['Flags'])) {
                $model->flags = $map['Flags'];
            }
        }

        return $model;
    }
}
