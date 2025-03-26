<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyDesktopTimerResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $desktopIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopIds' => 'DesktopIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopIds)) {
            Model::validateArray($this->desktopIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopIds) {
            if (\is_array($this->desktopIds)) {
                $res['DesktopIds'] = [];
                $n1 = 0;
                foreach ($this->desktopIds as $item1) {
                    $res['DesktopIds'][$n1++] = $item1;
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
        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = [];
                $n1 = 0;
                foreach ($map['DesktopIds'] as $item1) {
                    $model->desktopIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
