<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersPasswordResponseBody\desktopUsers;

class DescribeUsersPasswordResponseBody extends Model
{
    /**
     * @var desktopUsers[]
     */
    public $desktopUsers;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopUsers' => 'DesktopUsers',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopUsers)) {
            Model::validateArray($this->desktopUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopUsers) {
            if (\is_array($this->desktopUsers)) {
                $res['DesktopUsers'] = [];
                $n1                  = 0;
                foreach ($this->desktopUsers as $item1) {
                    $res['DesktopUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopUsers'])) {
            if (!empty($map['DesktopUsers'])) {
                $model->desktopUsers = [];
                $n1                  = 0;
                foreach ($map['DesktopUsers'] as $item1) {
                    $model->desktopUsers[$n1++] = desktopUsers::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
