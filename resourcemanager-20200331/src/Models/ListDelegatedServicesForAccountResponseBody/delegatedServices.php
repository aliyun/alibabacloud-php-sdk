<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedServicesForAccountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedServicesForAccountResponseBody\delegatedServices\delegatedService;

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
        if (\is_array($this->delegatedService)) {
            Model::validateArray($this->delegatedService);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delegatedService) {
            if (\is_array($this->delegatedService)) {
                $res['DelegatedService'] = [];
                $n1                      = 0;
                foreach ($this->delegatedService as $item1) {
                    $res['DelegatedService'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DelegatedService'])) {
            if (!empty($map['DelegatedService'])) {
                $model->delegatedService = [];
                $n1                      = 0;
                foreach ($map['DelegatedService'] as $item1) {
                    $model->delegatedService[$n1++] = delegatedService::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
