<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteContainerAppsRequest\containerApp;
use AlibabaCloud\Tea\Model;

class DeleteContainerAppsRequest extends Model
{
    /**
     * @description The information about containers.
     *
     * @var containerApp[]
     */
    public $containerApp;
    protected $_name = [
        'containerApp' => 'ContainerApp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerApp) {
            $res['ContainerApp'] = [];
            if (null !== $this->containerApp && \is_array($this->containerApp)) {
                $n = 0;
                foreach ($this->containerApp as $item) {
                    $res['ContainerApp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContainerAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerApp'])) {
            if (!empty($map['ContainerApp'])) {
                $model->containerApp = [];
                $n                   = 0;
                foreach ($map['ContainerApp'] as $item) {
                    $model->containerApp[$n++] = null !== $item ? containerApp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
