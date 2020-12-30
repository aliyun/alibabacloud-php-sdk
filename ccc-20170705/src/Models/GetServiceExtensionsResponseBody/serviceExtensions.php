<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsResponseBody\serviceExtensions\serviceExtension;
use AlibabaCloud\Tea\Model;

class serviceExtensions extends Model
{
    /**
     * @var serviceExtension[]
     */
    public $serviceExtension;
    protected $_name = [
        'serviceExtension' => 'ServiceExtension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceExtension) {
            $res['ServiceExtension'] = [];
            if (null !== $this->serviceExtension && \is_array($this->serviceExtension)) {
                $n = 0;
                foreach ($this->serviceExtension as $item) {
                    $res['ServiceExtension'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceExtensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceExtension'])) {
            if (!empty($map['ServiceExtension'])) {
                $model->serviceExtension = [];
                $n                       = 0;
                foreach ($map['ServiceExtension'] as $item) {
                    $model->serviceExtension[$n++] = null !== $item ? serviceExtension::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
