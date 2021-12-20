<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponse\desktopGroups;
use AlibabaCloud\Tea\Model;

class DescribeDesktopGroupsResponse extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var desktopGroups[]
     */
    public $desktopGroups;
    protected $_name = [
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'desktopGroups' => 'DesktopGroups',
    ];

    public function validate()
    {
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('desktopGroups', $this->desktopGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->desktopGroups) {
            $res['DesktopGroups'] = [];
            if (null !== $this->desktopGroups && \is_array($this->desktopGroups)) {
                $n = 0;
                foreach ($this->desktopGroups as $item) {
                    $res['DesktopGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopGroupsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DesktopGroups'])) {
            if (!empty($map['DesktopGroups'])) {
                $model->desktopGroups = [];
                $n                    = 0;
                foreach ($map['DesktopGroups'] as $item) {
                    $model->desktopGroups[$n++] = null !== $item ? desktopGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
