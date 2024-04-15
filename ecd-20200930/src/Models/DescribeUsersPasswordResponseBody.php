<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersPasswordResponseBody\desktopUsers;
use AlibabaCloud\Tea\Model;

class DescribeUsersPasswordResponseBody extends Model
{
    /**
     * @description The authorized users of the cloud computer.
     *
     * @var desktopUsers[]
     */
    public $desktopUsers;

    /**
     * @description The ID of the request.
     *
     * @example F7B4B17B-5C8A-514C-AA4D-F8090E3A63E9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopUsers' => 'DesktopUsers',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopUsers) {
            $res['DesktopUsers'] = [];
            if (null !== $this->desktopUsers && \is_array($this->desktopUsers)) {
                $n = 0;
                foreach ($this->desktopUsers as $item) {
                    $res['DesktopUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsersPasswordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopUsers'])) {
            if (!empty($map['DesktopUsers'])) {
                $model->desktopUsers = [];
                $n                   = 0;
                foreach ($map['DesktopUsers'] as $item) {
                    $model->desktopUsers[$n++] = null !== $item ? desktopUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
