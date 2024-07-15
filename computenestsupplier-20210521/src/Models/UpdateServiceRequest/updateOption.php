<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;

use AlibabaCloud\Tea\Model;

class updateOption extends Model
{
    /**
     * @description The options for update the service. Valid values:
     * - PARAMETERS
     * @example PARAMETERS
     *
     * @var string
     */
    public $updateFrom;
    protected $_name = [
        'updateFrom' => 'UpdateFrom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateFrom) {
            $res['UpdateFrom'] = $this->updateFrom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateFrom'])) {
            $model->updateFrom = $map['UpdateFrom'];
        }

        return $model;
    }
}
