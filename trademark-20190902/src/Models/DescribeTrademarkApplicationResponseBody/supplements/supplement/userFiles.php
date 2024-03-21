<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\supplements\supplement;

use AlibabaCloud\Tea\Model;

class userFiles extends Model
{
    /**
     * @var string[]
     */
    public $userFile;
    protected $_name = [
        'userFile' => 'UserFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userFile) {
            $res['UserFile'] = $this->userFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserFile'])) {
            if (!empty($map['UserFile'])) {
                $model->userFile = $map['UserFile'];
            }
        }

        return $model;
    }
}
