<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponseBody\remoteAccesses\remoteAccess;
use AlibabaCloud\Tea\Model;

class remoteAccesses extends Model
{
    /**
     * @var remoteAccess[]
     */
    public $remoteAccess;
    protected $_name = [
        'remoteAccess' => 'RemoteAccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remoteAccess) {
            $res['RemoteAccess'] = [];
            if (null !== $this->remoteAccess && \is_array($this->remoteAccess)) {
                $n = 0;
                foreach ($this->remoteAccess as $item) {
                    $res['RemoteAccess'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remoteAccesses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemoteAccess'])) {
            if (!empty($map['RemoteAccess'])) {
                $model->remoteAccess = [];
                $n                   = 0;
                foreach ($map['RemoteAccess'] as $item) {
                    $model->remoteAccess[$n++] = null !== $item ? remoteAccess::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
