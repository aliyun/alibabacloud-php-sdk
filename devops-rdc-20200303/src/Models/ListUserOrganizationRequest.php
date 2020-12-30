<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class ListUserOrganizationRequest extends Model
{
    /**
     * @var string
     */
    public $realPk;
    protected $_name = [
        'realPk' => 'RealPk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realPk) {
            $res['RealPk'] = $this->realPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserOrganizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RealPk'])) {
            $model->realPk = $map['RealPk'];
        }

        return $model;
    }
}
