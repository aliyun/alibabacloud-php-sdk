<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddAssetSelectionCriteriaRequest;

use AlibabaCloud\Tea\Model;

class targetOperationList extends Model
{
    /**
     * @description The type of the operation. Valid values:
     *
     *   **add**
     *   **del**
     *
     * @example del
     *
     * @var string
     */
    public $operation;

    /**
     * @description The ID of the asset.
     *
     * @example 1188****
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'operation' => 'Operation',
        'target'    => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetOperationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
