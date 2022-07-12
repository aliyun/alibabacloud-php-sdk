<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops;
use AlibabaCloud\Tea\Model;

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
        'desktops'  => 'Desktops',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktops) {
            $res['Desktops'] = null !== $this->desktops ? $this->desktops->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDesktopGroupDetailResponseBody
     */
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
