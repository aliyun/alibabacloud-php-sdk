<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListMFADevicesForUserResponseBody\MFADevices;
use AlibabaCloud\Tea\Model;

class ListMFADevicesForUserResponseBody extends Model
{
    /**
     * @description The MFA devices.
     *
     * @var MFADevices[]
     */
    public $MFADevices;

    /**
     * @description The ID of the request.
     *
     * @example 8B9982ED-FD0D-5622-8EA0-7B768685DCE7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of MFA devices.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'MFADevices'  => 'MFADevices',
        'requestId'   => 'RequestId',
        'totalCounts' => 'TotalCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MFADevices) {
            $res['MFADevices'] = [];
            if (null !== $this->MFADevices && \is_array($this->MFADevices)) {
                $n = 0;
                foreach ($this->MFADevices as $item) {
                    $res['MFADevices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMFADevicesForUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MFADevices'])) {
            if (!empty($map['MFADevices'])) {
                $model->MFADevices = [];
                $n                 = 0;
                foreach ($map['MFADevices'] as $item) {
                    $model->MFADevices[$n++] = null !== $item ? MFADevices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
