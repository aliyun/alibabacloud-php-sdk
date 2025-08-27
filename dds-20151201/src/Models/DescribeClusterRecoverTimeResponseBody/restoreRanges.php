<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterRecoverTimeResponseBody;

use AlibabaCloud\Dara\Model;

class restoreRanges extends Model
{
    /**
     * @var string
     */
    public $restoreBeginTime;

    /**
     * @var string
     */
    public $restoreEndTime;

    /**
     * @var string
     */
    public $restoreType;
    protected $_name = [
        'restoreBeginTime' => 'RestoreBeginTime',
        'restoreEndTime' => 'RestoreEndTime',
        'restoreType' => 'RestoreType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restoreBeginTime) {
            $res['RestoreBeginTime'] = $this->restoreBeginTime;
        }

        if (null !== $this->restoreEndTime) {
            $res['RestoreEndTime'] = $this->restoreEndTime;
        }

        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
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
        if (isset($map['RestoreBeginTime'])) {
            $model->restoreBeginTime = $map['RestoreBeginTime'];
        }

        if (isset($map['RestoreEndTime'])) {
            $model->restoreEndTime = $map['RestoreEndTime'];
        }

        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }

        return $model;
    }
}
