<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion;

use AlibabaCloud\Tea\Model;

class whiteUserList extends Model
{
    /**
     * @var string[]
     */
    public $whiteUser;
    protected $_name = [
        'whiteUser' => 'WhiteUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteUser) {
            $res['WhiteUser'] = $this->whiteUser;
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
        if (isset($map['WhiteUser'])) {
            if (!empty($map['WhiteUser'])) {
                $model->whiteUser = $map['WhiteUser'];
            }
        }

        return $model;
    }
}
