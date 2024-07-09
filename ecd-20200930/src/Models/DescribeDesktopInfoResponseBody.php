<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopInfoResponseBody\desktops;
use AlibabaCloud\Tea\Model;

class DescribeDesktopInfoResponseBody extends Model
{
    /**
     * @description The basic information about cloud computers.
     *
     * @var desktops[]
     */
    public $desktops;

    /**
     * @description The request ID.
     *
     * @example 062B1439-709A-580E-85DF-CE97A1560565
     *
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
            $res['Desktops'] = [];
            if (null !== $this->desktops && \is_array($this->desktops)) {
                $n = 0;
                foreach ($this->desktops as $item) {
                    $res['Desktops'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDesktopInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desktops'])) {
            if (!empty($map['Desktops'])) {
                $model->desktops = [];
                $n               = 0;
                foreach ($map['Desktops'] as $item) {
                    $model->desktops[$n++] = null !== $item ? desktops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
