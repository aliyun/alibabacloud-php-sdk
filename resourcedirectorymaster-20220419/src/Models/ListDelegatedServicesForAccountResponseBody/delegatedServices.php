<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListDelegatedServicesForAccountResponseBody;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListDelegatedServicesForAccountResponseBody\delegatedServices\delegatedService;
use AlibabaCloud\Tea\Model;

class delegatedServices extends Model
{
    /**
     * @var delegatedService[]
     */
    public $delegatedService;
    protected $_name = [
        'delegatedService' => 'DelegatedService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delegatedService) {
            $res['DelegatedService'] = [];
            if (null !== $this->delegatedService && \is_array($this->delegatedService)) {
                $n = 0;
                foreach ($this->delegatedService as $item) {
                    $res['DelegatedService'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delegatedServices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelegatedService'])) {
            if (!empty($map['DelegatedService'])) {
                $model->delegatedService = [];
                $n                       = 0;
                foreach ($map['DelegatedService'] as $item) {
                    $model->delegatedService[$n++] = null !== $item ? delegatedService::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
