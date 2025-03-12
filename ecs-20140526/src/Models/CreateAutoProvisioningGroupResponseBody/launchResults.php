<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupResponseBody\launchResults\launchResult;
use AlibabaCloud\Tea\Model;

class launchResults extends Model
{
    /**
     * @var launchResult[]
     */
    public $launchResult;
    protected $_name = [
        'launchResult' => 'LaunchResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchResult) {
            $res['LaunchResult'] = [];
            if (null !== $this->launchResult && \is_array($this->launchResult)) {
                $n = 0;
                foreach ($this->launchResult as $item) {
                    $res['LaunchResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchResult'])) {
            if (!empty($map['LaunchResult'])) {
                $model->launchResult = [];
                $n                   = 0;
                foreach ($map['LaunchResult'] as $item) {
                    $model->launchResult[$n++] = null !== $item ? launchResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
