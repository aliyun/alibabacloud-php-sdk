<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Tea\Model;

class vswIds extends Model
{
    /**
     * @var string[]
     */
    public $vswId;
    protected $_name = [
        'vswId' => 'VswId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vswIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VswId'])) {
            if (!empty($map['VswId'])) {
                $model->vswId = $map['VswId'];
            }
        }

        return $model;
    }
}
