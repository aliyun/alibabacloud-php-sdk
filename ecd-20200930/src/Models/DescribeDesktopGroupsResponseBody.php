<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody\desktopGroups;
use AlibabaCloud\Tea\Model;

class DescribeDesktopGroupsResponseBody extends Model
{
    /**
     * @var desktopGroups[]
     */
    public $desktopGroups;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopGroups' => 'DesktopGroups',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroups) {
            $res['DesktopGroups'] = [];
            if (null !== $this->desktopGroups && \is_array($this->desktopGroups)) {
                $n = 0;
                foreach ($this->desktopGroups as $item) {
                    $res['DesktopGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroups'])) {
            if (!empty($map['DesktopGroups'])) {
                $model->desktopGroups = [];
                $n                    = 0;
                foreach ($map['DesktopGroups'] as $item) {
                    $model->desktopGroups[$n++] = null !== $item ? desktopGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
