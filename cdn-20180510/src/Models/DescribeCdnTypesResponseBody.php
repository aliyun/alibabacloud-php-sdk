<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesResponseBody\cdnTypes;

class DescribeCdnTypesResponseBody extends Model
{
    /**
     * @var cdnTypes
     */
    public $cdnTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cdnTypes' => 'CdnTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->cdnTypes) {
            $this->cdnTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdnTypes) {
            $res['CdnTypes'] = null !== $this->cdnTypes ? $this->cdnTypes->toArray($noStream) : $this->cdnTypes;
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
        if (isset($map['CdnTypes'])) {
            $model->cdnTypes = cdnTypes::fromMap($map['CdnTypes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
