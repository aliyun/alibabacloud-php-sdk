<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedFlexibleResource;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList;
use AlibabaCloud\Tea\Model;

class supportedSerialList extends Model
{
    /**
     * @description The supported edition. Valid values:
     *
     *   **basic**: Basic Edition.
     *   **cluster**: Cluster Edition.
     *   **mixed_storage**: elastic mode for Cluster Edition.
     *
     * @example mixed_storage
     *
     * @var string
     */
    public $serial;

    /**
     * @description The supported resources in elastic mode.
     *
     * @var supportedFlexibleResource[]
     */
    public $supportedFlexibleResource;

    /**
     * @description The supported resources in reserved mode.
     *
     * @var supportedInstanceClassList[]
     */
    public $supportedInstanceClassList;
    protected $_name = [
        'serial'                     => 'Serial',
        'supportedFlexibleResource'  => 'SupportedFlexibleResource',
        'supportedInstanceClassList' => 'SupportedInstanceClassList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }
        if (null !== $this->supportedFlexibleResource) {
            $res['SupportedFlexibleResource'] = [];
            if (null !== $this->supportedFlexibleResource && \is_array($this->supportedFlexibleResource)) {
                $n = 0;
                foreach ($this->supportedFlexibleResource as $item) {
                    $res['SupportedFlexibleResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportedInstanceClassList) {
            $res['SupportedInstanceClassList'] = [];
            if (null !== $this->supportedInstanceClassList && \is_array($this->supportedInstanceClassList)) {
                $n = 0;
                foreach ($this->supportedInstanceClassList as $item) {
                    $res['SupportedInstanceClassList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedSerialList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Serial'])) {
            $model->serial = $map['Serial'];
        }
        if (isset($map['SupportedFlexibleResource'])) {
            if (!empty($map['SupportedFlexibleResource'])) {
                $model->supportedFlexibleResource = [];
                $n                                = 0;
                foreach ($map['SupportedFlexibleResource'] as $item) {
                    $model->supportedFlexibleResource[$n++] = null !== $item ? supportedFlexibleResource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportedInstanceClassList'])) {
            if (!empty($map['SupportedInstanceClassList'])) {
                $model->supportedInstanceClassList = [];
                $n                                 = 0;
                foreach ($map['SupportedInstanceClassList'] as $item) {
                    $model->supportedInstanceClassList[$n++] = null !== $item ? supportedInstanceClassList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
