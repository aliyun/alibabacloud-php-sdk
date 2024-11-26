<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody\result;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @var string[]
     */
    public $row;
    protected $_name = [
        'row' => 'Row',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->row) {
            $res['Row'] = $this->row;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Row'])) {
            if (!empty($map['Row'])) {
                $model->row = $map['Row'];
            }
        }

        return $model;
    }
}
