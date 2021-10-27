<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportPreCheckResultResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportPreCheckResultResponseBody\preCheckResult\subCheckItems;
use AlibabaCloud\Tea\Model;

class preCheckResult extends Model
{
    /**
     * @var string
     */
    public $preCheckName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var subCheckItems
     */
    public $subCheckItems;
    protected $_name = [
        'preCheckName'  => 'PreCheckName',
        'state'         => 'State',
        'subCheckItems' => 'SubCheckItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckName) {
            $res['PreCheckName'] = $this->preCheckName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->subCheckItems) {
            $res['SubCheckItems'] = null !== $this->subCheckItems ? $this->subCheckItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckName'])) {
            $model->preCheckName = $map['PreCheckName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubCheckItems'])) {
            $model->subCheckItems = subCheckItems::fromMap($map['SubCheckItems']);
        }

        return $model;
    }
}
