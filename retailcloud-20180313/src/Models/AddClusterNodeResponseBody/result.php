<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\AddClusterNodeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $nonsense;
    protected $_name = [
        'nonsense' => 'Nonsense',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonsense) {
            $res['Nonsense'] = $this->nonsense;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nonsense'])) {
            $model->nonsense = $map['Nonsense'];
        }

        return $model;
    }
}
