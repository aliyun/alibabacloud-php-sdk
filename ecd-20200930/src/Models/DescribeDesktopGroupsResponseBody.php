<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody\desktopGroups;

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
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopGroups)) {
            Model::validateArray($this->desktopGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopGroups) {
            if (\is_array($this->desktopGroups)) {
                $res['DesktopGroups'] = [];
                $n1 = 0;
                foreach ($this->desktopGroups as $item1) {
                    $res['DesktopGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroups'])) {
            if (!empty($map['DesktopGroups'])) {
                $model->desktopGroups = [];
                $n1 = 0;
                foreach ($map['DesktopGroups'] as $item1) {
                    $model->desktopGroups[$n1++] = desktopGroups::fromMap($item1);
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
