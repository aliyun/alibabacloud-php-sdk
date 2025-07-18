<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp;
use AlibabaCloud\Tea\Model;

class CommonConfig extends Model
{
    /**
     * @var idp
     */
    public $idp;
    protected $_name = [
        'idp' => 'Idp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->idp) {
            $res['Idp'] = null !== $this->idp ? $this->idp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Idp'])) {
            $model->idp = idp::fromMap($map['Idp']);
        }

        return $model;
    }
}
