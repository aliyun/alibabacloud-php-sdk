<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\ConfirmConsortiumMemberRequest;

use AlibabaCloud\Tea\Model;

class organization extends Model
{
    /**
     * @example peers-aaaaaa1-1oxw31d046jtl
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
