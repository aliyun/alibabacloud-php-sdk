<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeConcernNecessityResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $concernNecessity;
    protected $_name = [
        'requestId'        => 'RequestId',
        'concernNecessity' => 'ConcernNecessity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->concernNecessity) {
            $res['ConcernNecessity'] = $this->concernNecessity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConcernNecessityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConcernNecessity'])) {
            if (!empty($map['ConcernNecessity'])) {
                $model->concernNecessity = $map['ConcernNecessity'];
            }
        }

        return $model;
    }
}
