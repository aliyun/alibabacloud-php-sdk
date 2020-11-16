<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListDirectoryUsersResponse;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $endUser;
    protected $_name = [
        'endUser' => 'EndUser',
    ];

    public function validate()
    {
        Model::validateRequired('endUser', $this->endUser, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUser) {
            $res['EndUser'] = $this->endUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUser'])) {
            $model->endUser = $map['EndUser'];
        }

        return $model;
    }
}
