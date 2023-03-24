<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsResponseBody\applications;
use AlibabaCloud\Tea\Model;

class ListPrivateAccessApplicationsResponseBody extends Model
{
    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @example 748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'applications' => 'Applications',
        'requestId'    => 'RequestId',
        'totalNum'     => 'TotalNum',
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
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateAccessApplicationsResponseBody
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
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
