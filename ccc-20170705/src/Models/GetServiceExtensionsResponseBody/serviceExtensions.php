<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetServiceExtensionsResponseBody\serviceExtensions\serviceExtension;

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
        if (\is_array($this->serviceExtension)) {
            Model::validateArray($this->serviceExtension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceExtension) {
            if (\is_array($this->serviceExtension)) {
                $res['ServiceExtension'] = [];
                $n1 = 0;
                foreach ($this->serviceExtension as $item1) {
                    $res['ServiceExtension'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServiceExtension'])) {
            if (!empty($map['ServiceExtension'])) {
                $model->serviceExtension = [];
                $n1 = 0;
                foreach ($map['ServiceExtension'] as $item1) {
                    $model->serviceExtension[$n1] = serviceExtension::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
