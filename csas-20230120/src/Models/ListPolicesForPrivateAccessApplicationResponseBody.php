<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessApplicationResponseBody\applications;
use AlibabaCloud\Tea\Model;

class ListPolicesForPrivateAccessApplicationResponseBody extends Model
{
    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @example 4AB972E2-D702-5464-B132-B1911498B8BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applications' => 'Applications',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = [];
            if (null !== $this->applications && \is_array($this->applications)) {
                $n = 0;
                foreach ($this->applications as $item) {
                    $res['Applications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicesForPrivateAccessApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n                   = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? applications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
