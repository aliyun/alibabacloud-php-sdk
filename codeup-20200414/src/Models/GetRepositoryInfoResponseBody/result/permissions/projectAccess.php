<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoResponseBody\result\permissions;

use AlibabaCloud\Tea\Model;

class projectAccess extends Model
{
    /**
     * @var int
     */
    public $accessLevel;
    protected $_name = [
        'accessLevel' => 'AccessLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectAccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }

        return $model;
    }
}
