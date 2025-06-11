<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListMFADevicesForUserResponseBody\MFADevices;

class ListMFADevicesForUserResponseBody extends Model
{
    /**
     * @var MFADevices[]
     */
    public $MFADevices;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'MFADevices' => 'MFADevices',
        'requestId' => 'RequestId',
        'totalCounts' => 'TotalCounts',
    ];

    public function validate()
    {
        if (\is_array($this->MFADevices)) {
            Model::validateArray($this->MFADevices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MFADevices) {
            if (\is_array($this->MFADevices)) {
                $res['MFADevices'] = [];
                $n1 = 0;
                foreach ($this->MFADevices as $item1) {
                    $res['MFADevices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MFADevices'])) {
            if (!empty($map['MFADevices'])) {
                $model->MFADevices = [];
                $n1 = 0;
                foreach ($map['MFADevices'] as $item1) {
                    $model->MFADevices[$n1++] = MFADevices::fromMap($item1);
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
