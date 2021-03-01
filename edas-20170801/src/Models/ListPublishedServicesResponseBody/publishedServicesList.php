<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesResponseBody\publishedServicesList\listPublishedServices;
use AlibabaCloud\Tea\Model;

class publishedServicesList extends Model
{
    /**
     * @var listPublishedServices[]
     */
    public $listPublishedServices;
    protected $_name = [
        'listPublishedServices' => 'ListPublishedServices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listPublishedServices) {
            $res['ListPublishedServices'] = [];
            if (null !== $this->listPublishedServices && \is_array($this->listPublishedServices)) {
                $n = 0;
                foreach ($this->listPublishedServices as $item) {
                    $res['ListPublishedServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishedServicesList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListPublishedServices'])) {
            if (!empty($map['ListPublishedServices'])) {
                $model->listPublishedServices = [];
                $n                            = 0;
                foreach ($map['ListPublishedServices'] as $item) {
                    $model->listPublishedServices[$n++] = null !== $item ? listPublishedServices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
