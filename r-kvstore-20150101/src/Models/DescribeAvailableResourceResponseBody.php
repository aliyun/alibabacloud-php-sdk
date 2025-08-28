<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones;

class DescribeAvailableResourceResponseBody extends Model
{
    /**
     * @var availableZones
     */
    public $availableZones;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableZones' => 'AvailableZones',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->availableZones) {
            $this->availableZones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = null !== $this->availableZones ? $this->availableZones->toArray($noStream) : $this->availableZones;
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
        if (isset($map['AvailableZones'])) {
            $model->availableZones = availableZones::fromMap($map['AvailableZones']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
