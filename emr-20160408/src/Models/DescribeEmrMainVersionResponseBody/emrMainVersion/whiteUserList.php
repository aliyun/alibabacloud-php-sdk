<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion;

use AlibabaCloud\Tea\Model;

class whiteUserList extends Model
{
    /**
     * @var string[]
     */
    public $wwhiteUser;
    protected $_name = [
        'wwhiteUser' => 'WwhiteUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wwhiteUser) {
            $res['WwhiteUser'] = $this->wwhiteUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whiteUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WwhiteUser'])) {
            if (!empty($map['WwhiteUser'])) {
                $model->wwhiteUser = $map['WwhiteUser'];
            }
        }

        return $model;
    }
}
