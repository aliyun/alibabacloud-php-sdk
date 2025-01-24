<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DisconnectDesktopSessionsResponseBody\invalidSessions;

class DisconnectDesktopSessionsResponseBody extends Model
{
    /**
     * @var invalidSessions[]
     */
    public $invalidSessions;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invalidSessions' => 'InvalidSessions',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->invalidSessions)) {
            Model::validateArray($this->invalidSessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidSessions) {
            if (\is_array($this->invalidSessions)) {
                $res['InvalidSessions'] = [];
                $n1                     = 0;
                foreach ($this->invalidSessions as $item1) {
                    $res['InvalidSessions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InvalidSessions'])) {
            if (!empty($map['InvalidSessions'])) {
                $model->invalidSessions = [];
                $n1                     = 0;
                foreach ($map['InvalidSessions'] as $item1) {
                    $model->invalidSessions[$n1++] = invalidSessions::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
