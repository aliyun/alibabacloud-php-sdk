<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListNodesByBaselineRequest extends Model
{
    /**
     * @description The baseline ID. You can call the [ListBaselineConfigs](https://help.aliyun.com/document_detail/173964.html) operation to query the baseline ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $baselineId;
    protected $_name = [
        'baselineId' => 'BaselineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesByBaselineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        return $model;
    }
}
