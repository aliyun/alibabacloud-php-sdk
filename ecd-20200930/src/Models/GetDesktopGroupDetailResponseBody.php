<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops;

class GetDesktopGroupDetailResponseBody extends Model
{
    /**
     * @var desktops
     */
    public $desktops;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktops' => 'Desktops',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->desktops) {
            $this->desktops->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktops) {
            $res['Desktops'] = null !== $this->desktops ? $this->desktops->toArray($noStream) : $this->desktops;
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
        if (isset($map['Desktops'])) {
            $model->desktops = desktops::fromMap($map['Desktops']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
