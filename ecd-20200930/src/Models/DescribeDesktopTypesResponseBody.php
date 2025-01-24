<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponseBody\desktopTypes;

class DescribeDesktopTypesResponseBody extends Model
{
    /**
     * @var desktopTypes[]
     */
    public $desktopTypes;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopTypes' => 'DesktopTypes',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopTypes)) {
            Model::validateArray($this->desktopTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopTypes) {
            if (\is_array($this->desktopTypes)) {
                $res['DesktopTypes'] = [];
                $n1                  = 0;
                foreach ($this->desktopTypes as $item1) {
                    $res['DesktopTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DesktopTypes'])) {
            if (!empty($map['DesktopTypes'])) {
                $model->desktopTypes = [];
                $n1                  = 0;
                foreach ($map['DesktopTypes'] as $item1) {
                    $model->desktopTypes[$n1++] = desktopTypes::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
