<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponseBody\desktopTypes;
use AlibabaCloud\Tea\Model;

class DescribeDesktopTypesResponseBody extends Model
{
    /**
     * @description Details of the desktop types.
     *
     * @var desktopTypes[]
     */
    public $desktopTypes;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopTypes' => 'DesktopTypes',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopTypes) {
            $res['DesktopTypes'] = [];
            if (null !== $this->desktopTypes && \is_array($this->desktopTypes)) {
                $n = 0;
                foreach ($this->desktopTypes as $item) {
                    $res['DesktopTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDesktopTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopTypes'])) {
            if (!empty($map['DesktopTypes'])) {
                $model->desktopTypes = [];
                $n                   = 0;
                foreach ($map['DesktopTypes'] as $item) {
                    $model->desktopTypes[$n++] = null !== $item ? desktopTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
