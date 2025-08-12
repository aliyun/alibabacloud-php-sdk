<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody\liveAreasList;

class DescribeLivePrivateLineAreasResponseBody extends Model
{
    /**
     * @var liveAreasList
     */
    public $liveAreasList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveAreasList' => 'LiveAreasList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveAreasList) {
            $this->liveAreasList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveAreasList) {
            $res['LiveAreasList'] = null !== $this->liveAreasList ? $this->liveAreasList->toArray($noStream) : $this->liveAreasList;
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
        if (isset($map['LiveAreasList'])) {
            $model->liveAreasList = liveAreasList::fromMap($map['LiveAreasList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
