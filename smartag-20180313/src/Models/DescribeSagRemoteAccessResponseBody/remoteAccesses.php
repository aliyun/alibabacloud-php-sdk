<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagRemoteAccessResponseBody\remoteAccesses\remoteAccess;

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
        if (\is_array($this->remoteAccess)) {
            Model::validateArray($this->remoteAccess);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remoteAccess) {
            if (\is_array($this->remoteAccess)) {
                $res['RemoteAccess'] = [];
                $n1 = 0;
                foreach ($this->remoteAccess as $item1) {
                    $res['RemoteAccess'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RemoteAccess'])) {
            if (!empty($map['RemoteAccess'])) {
                $model->remoteAccess = [];
                $n1 = 0;
                foreach ($map['RemoteAccess'] as $item1) {
                    $model->remoteAccess[$n1] = remoteAccess::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
