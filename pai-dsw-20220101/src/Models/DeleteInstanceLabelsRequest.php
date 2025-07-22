<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceLabelsRequest extends Model
{
    /**
     * @description The keys of the tags that you want to delete. Separate multiple tags with commas (,).
     *
     * This parameter is required.
     *
     * @example labelKey1,labelKey2,labelKey3
     *
     * @var string
     */
    public $labelKeys;
    protected $_name = [
        'labelKeys' => 'LabelKeys',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelKeys) {
            $res['LabelKeys'] = $this->labelKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelKeys'])) {
            $model->labelKeys = $map['LabelKeys'];
        }

        return $model;
    }
}
