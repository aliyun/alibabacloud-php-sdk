<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopIdsByVulNamesResponse\desktopItems;
use AlibabaCloud\Tea\Model;

class DescribeDesktopIdsByVulNamesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var desktopItems[]
     */
    public $desktopItems;
    protected $_name = [
        'requestId'    => 'RequestId',
        'desktopItems' => 'DesktopItems',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('desktopItems', $this->desktopItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->desktopItems) {
            $res['DesktopItems'] = [];
            if (null !== $this->desktopItems && \is_array($this->desktopItems)) {
                $n = 0;
                foreach ($this->desktopItems as $item) {
                    $res['DesktopItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopIdsByVulNamesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DesktopItems'])) {
            if (!empty($map['DesktopItems'])) {
                $model->desktopItems = [];
                $n                   = 0;
                foreach ($map['DesktopItems'] as $item) {
                    $model->desktopItems[$n++] = null !== $item ? desktopItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
