<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\Event;

use AlibabaCloud\Tea\Model;

class resourceDevice extends Model
{
    /**
     * @example ASW-1
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 杭州X空间
     *
     * @var string
     */
    public $physicalSpace;
    protected $_name = [
        'hostName'      => 'HostName',
        'physicalSpace' => 'PhysicalSpace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->physicalSpace) {
            $res['PhysicalSpace'] = $this->physicalSpace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['PhysicalSpace'])) {
            $model->physicalSpace = $map['PhysicalSpace'];
        }

        return $model;
    }
}
