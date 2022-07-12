<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;
use AlibabaCloud\Tea\Model;

class DescribeDesktopsResponseBody extends Model
{
    /**
     * @var desktops[]
     */
    public $desktops;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'desktops'   => 'Desktops',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktops) {
            $res['Desktops'] = [];
            if (null !== $this->desktops && \is_array($this->desktops)) {
                $n = 0;
                foreach ($this->desktops as $item) {
                    $res['Desktops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desktops'])) {
            if (!empty($map['Desktops'])) {
                $model->desktops = [];
                $n               = 0;
                foreach ($map['Desktops'] as $item) {
                    $model->desktops[$n++] = null !== $item ? desktops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
