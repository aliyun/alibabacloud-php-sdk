<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgWhiteListDeleteListShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $idsShrink;
    protected $_name = [
        'idsShrink' => 'Ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgWhiteListDeleteListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }

        return $model;
    }
}
