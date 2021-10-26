<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVarDiffBetweenGroupResponseBody\variableDiffs\variableDiff;

use AlibabaCloud\Tea\Model;

class pre extends Model
{
    /**
     * @var string
     */
    public $diffStatus;

    /**
     * @var string
     */
    public $oldValue;

    /**
     * @var string
     */
    public $newValue;
    protected $_name = [
        'diffStatus' => 'DiffStatus',
        'oldValue'   => 'OldValue',
        'newValue'   => 'NewValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diffStatus) {
            $res['DiffStatus'] = $this->diffStatus;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pre
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiffStatus'])) {
            $model->diffStatus = $map['DiffStatus'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }

        return $model;
    }
}
