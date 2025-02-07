<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponseBody\page;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterKubeconfigStatesResponseBody\states;

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
        if (null !== $this->page) {
            $this->page->validate();
        }
        if (\is_array($this->states)) {
            Model::validateArray($this->states);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
        }

        if (null !== $this->states) {
            if (\is_array($this->states)) {
                $res['states'] = [];
                $n1            = 0;
                foreach ($this->states as $item1) {
                    $res['states'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['page'])) {
            $model->page = page::fromMap($map['page']);
        }

        if (isset($map['states'])) {
            if (!empty($map['states'])) {
                $model->states = [];
                $n1            = 0;
                foreach ($map['states'] as $item1) {
                    $model->states[$n1++] = states::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
