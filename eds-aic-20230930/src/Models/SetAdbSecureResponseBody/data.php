<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\SetAdbSecureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of the cloud phone instances for which the ADB authentication feature failed to be enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The IDs of the cloud phone instances for which the ADB authentication feature is enabled.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The total number of the cloud phone instances.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failCount'   => 'FailCount',
        'instanceIds' => 'InstanceIds',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
