<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiErrorResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiErrorResponseBody\serverErrors\serverError;
use AlibabaCloud\Tea\Model;

class serverErrors extends Model
{
    /**
     * @var serverError[]
     */
    public $serverError;
    protected $_name = [
        'serverError' => 'ServerError',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverError) {
            $res['ServerError'] = [];
            if (null !== $this->serverError && \is_array($this->serverError)) {
                $n = 0;
                foreach ($this->serverError as $item) {
                    $res['ServerError'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverErrors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerError'])) {
            if (!empty($map['ServerError'])) {
                $model->serverError = [];
                $n                  = 0;
                foreach ($map['ServerError'] as $item) {
                    $model->serverError[$n++] = null !== $item ? serverError::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
