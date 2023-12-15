<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result\diagnostics;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result\diagnostics\trace\location;
use AlibabaCloud\Tea\Model;

class trace extends Model
{
    /**
     * @var location
     */
    public $location;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'location' => 'Location',
        'message'  => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
