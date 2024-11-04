<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessTaskCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 67
     *
     * @var int
     */
    public $count;

    /**
     * @example a680c9ae-****-4c39-****-0302****fc8e
     *
     * @var string
     */
    public $entityUuid;
    protected $_name = [
        'count'      => 'Count',
        'entityUuid' => 'EntityUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->entityUuid) {
            $res['EntityUuid'] = $this->entityUuid;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['EntityUuid'])) {
            $model->entityUuid = $map['EntityUuid'];
        }

        return $model;
    }
}
