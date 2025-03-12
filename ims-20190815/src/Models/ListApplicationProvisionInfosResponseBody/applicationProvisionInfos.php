<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponseBody\applicationProvisionInfos\applicationProvisionInfo;
use AlibabaCloud\Tea\Model;

class applicationProvisionInfos extends Model
{
    /**
     * @var applicationProvisionInfo[]
     */
    public $applicationProvisionInfo;
    protected $_name = [
        'applicationProvisionInfo' => 'ApplicationProvisionInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationProvisionInfo) {
            $res['ApplicationProvisionInfo'] = [];
            if (null !== $this->applicationProvisionInfo && \is_array($this->applicationProvisionInfo)) {
                $n = 0;
                foreach ($this->applicationProvisionInfo as $item) {
                    $res['ApplicationProvisionInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationProvisionInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationProvisionInfo'])) {
            if (!empty($map['ApplicationProvisionInfo'])) {
                $model->applicationProvisionInfo = [];
                $n                               = 0;
                foreach ($map['ApplicationProvisionInfo'] as $item) {
                    $model->applicationProvisionInfo[$n++] = null !== $item ? applicationProvisionInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
