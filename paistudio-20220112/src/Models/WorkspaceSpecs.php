<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class WorkspaceSpecs extends Model
{
    /**
     * @var string
     */
    public $product;

    /**
     * @var WorkspaceSpec[]
     */
    public $specs;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'product'     => 'Product',
        'specs'       => 'Specs',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->specs) {
            $res['Specs'] = [];
            if (null !== $this->specs && \is_array($this->specs)) {
                $n = 0;
                foreach ($this->specs as $item) {
                    $res['Specs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WorkspaceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Specs'])) {
            if (!empty($map['Specs'])) {
                $model->specs = [];
                $n            = 0;
                foreach ($map['Specs'] as $item) {
                    $model->specs[$n++] = null !== $item ? WorkspaceSpec::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
