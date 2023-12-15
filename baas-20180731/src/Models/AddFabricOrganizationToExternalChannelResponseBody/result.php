<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\AddFabricOrganizationToExternalChannelResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $m;

    /**
     * @var int
     */
    public $n;
    protected $_name = [
        'm' => 'M',
        'n' => 'N',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->m) {
            $res['M'] = $this->m;
        }
        if (null !== $this->n) {
            $res['N'] = $this->n;
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
        if (isset($map['M'])) {
            $model->m = $map['M'];
        }
        if (isset($map['N'])) {
            $model->n = $map['N'];
        }

        return $model;
    }
}
