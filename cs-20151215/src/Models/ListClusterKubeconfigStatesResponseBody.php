<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponseBody\page;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponseBody\states;
use AlibabaCloud\Tea\Model;

class ListClusterKubeconfigStatesResponseBody extends Model
{
    /**
     * @var page
     */
    public $page;

    /**
     * @var states[]
     */
    public $states;
    protected $_name = [
        'page'   => 'page',
        'states' => 'states',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->states) {
            $res['states'] = [];
            if (null !== $this->states && \is_array($this->states)) {
                $n = 0;
                foreach ($this->states as $item) {
                    $res['states'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterKubeconfigStatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page'])) {
            $model->page = page::fromMap($map['page']);
        }
        if (isset($map['states'])) {
            if (!empty($map['states'])) {
                $model->states = [];
                $n             = 0;
                foreach ($map['states'] as $item) {
                    $model->states[$n++] = null !== $item ? states::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
