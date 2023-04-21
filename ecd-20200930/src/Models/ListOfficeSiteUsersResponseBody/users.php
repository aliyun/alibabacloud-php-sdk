<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteUsersResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description The display name of the AD user.
     *
     * @example Alice
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The username of the AD user.
     *
     * @example Alice
     *
     * @var string
     */
    public $endUser;
    protected $_name = [
        'displayName' => 'DisplayName',
        'endUser'     => 'EndUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EndUser'])) {
            $model->endUser = $map['EndUser'];
        }

        return $model;
    }
}
