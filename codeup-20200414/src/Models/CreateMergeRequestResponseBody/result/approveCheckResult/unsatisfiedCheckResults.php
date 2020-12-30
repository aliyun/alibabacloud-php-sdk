<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateMergeRequestResponseBody\result\approveCheckResult;

use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateMergeRequestResponseBody\result\approveCheckResult\unsatisfiedCheckResults\extraUsers;
use AlibabaCloud\Tea\Model;

class unsatisfiedCheckResults extends Model
{
    /**
     * @var string[]
     */
    public $satisfiedItems;

    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var string[]
     */
    public $unsatisfiedItems;

    /**
     * @var extraUsers[]
     */
    public $extraUsers;

    /**
     * @var string
     */
    public $checkName;
    protected $_name = [
        'satisfiedItems'   => 'SatisfiedItems',
        'checkStatus'      => 'CheckStatus',
        'checkType'        => 'CheckType',
        'unsatisfiedItems' => 'UnsatisfiedItems',
        'extraUsers'       => 'ExtraUsers',
        'checkName'        => 'CheckName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->satisfiedItems) {
            $res['SatisfiedItems'] = $this->satisfiedItems;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->unsatisfiedItems) {
            $res['UnsatisfiedItems'] = $this->unsatisfiedItems;
        }
        if (null !== $this->extraUsers) {
            $res['ExtraUsers'] = [];
            if (null !== $this->extraUsers && \is_array($this->extraUsers)) {
                $n = 0;
                foreach ($this->extraUsers as $item) {
                    $res['ExtraUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unsatisfiedCheckResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SatisfiedItems'])) {
            if (!empty($map['SatisfiedItems'])) {
                $model->satisfiedItems = $map['SatisfiedItems'];
            }
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['UnsatisfiedItems'])) {
            if (!empty($map['UnsatisfiedItems'])) {
                $model->unsatisfiedItems = $map['UnsatisfiedItems'];
            }
        }
        if (isset($map['ExtraUsers'])) {
            if (!empty($map['ExtraUsers'])) {
                $model->extraUsers = [];
                $n                 = 0;
                foreach ($map['ExtraUsers'] as $item) {
                    $model->extraUsers[$n++] = null !== $item ? extraUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        return $model;
    }
}
