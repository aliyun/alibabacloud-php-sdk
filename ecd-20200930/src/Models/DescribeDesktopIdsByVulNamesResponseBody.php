<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopIdsByVulNamesResponseBody\desktopItems;

class DescribeDesktopIdsByVulNamesResponseBody extends Model
{
    /**
     * @var desktopItems[]
     */
    public $desktopItems;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopItems' => 'DesktopItems',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopItems)) {
            Model::validateArray($this->desktopItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopItems) {
            if (\is_array($this->desktopItems)) {
                $res['DesktopItems'] = [];
                $n1 = 0;
                foreach ($this->desktopItems as $item1) {
                    $res['DesktopItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DesktopItems'])) {
            if (!empty($map['DesktopItems'])) {
                $model->desktopItems = [];
                $n1 = 0;
                foreach ($map['DesktopItems'] as $item1) {
                    $model->desktopItems[$n1] = desktopItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
