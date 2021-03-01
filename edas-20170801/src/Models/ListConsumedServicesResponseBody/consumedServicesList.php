<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices;
use AlibabaCloud\Tea\Model;

class consumedServicesList extends Model
{
    /**
     * @var listConsumedServices[]
     */
    public $listConsumedServices;
    protected $_name = [
        'listConsumedServices' => 'ListConsumedServices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listConsumedServices) {
            $res['ListConsumedServices'] = [];
            if (null !== $this->listConsumedServices && \is_array($this->listConsumedServices)) {
                $n = 0;
                foreach ($this->listConsumedServices as $item) {
                    $res['ListConsumedServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumedServicesList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListConsumedServices'])) {
            if (!empty($map['ListConsumedServices'])) {
                $model->listConsumedServices = [];
                $n                           = 0;
                foreach ($map['ListConsumedServices'] as $item) {
                    $model->listConsumedServices[$n++] = null !== $item ? listConsumedServices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
