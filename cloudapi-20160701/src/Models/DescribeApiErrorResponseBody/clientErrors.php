<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiErrorResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiErrorResponseBody\clientErrors\clientError;
use AlibabaCloud\Tea\Model;

class clientErrors extends Model
{
    /**
     * @var clientError[]
     */
    public $clientError;
    protected $_name = [
        'clientError' => 'ClientError',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientError) {
            $res['ClientError'] = [];
            if (null !== $this->clientError && \is_array($this->clientError)) {
                $n = 0;
                foreach ($this->clientError as $item) {
                    $res['ClientError'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientErrors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientError'])) {
            if (!empty($map['ClientError'])) {
                $model->clientError = [];
                $n                  = 0;
                foreach ($map['ClientError'] as $item) {
                    $model->clientError[$n++] = null !== $item ? clientError::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
