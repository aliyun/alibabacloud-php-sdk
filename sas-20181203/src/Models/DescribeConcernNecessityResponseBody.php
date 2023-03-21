<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeConcernNecessityResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $concernNecessity;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'concernNecessity' => 'ConcernNecessity',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concernNecessity) {
            $res['ConcernNecessity'] = $this->concernNecessity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConcernNecessity'])) {
            if (!empty($map['ConcernNecessity'])) {
                $model->concernNecessity = $map['ConcernNecessity'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
