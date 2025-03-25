<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateMmsFetchMetadataJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1000002
     *
     * @var int
     */
    public $scanId;
    protected $_name = [
        'scanId' => 'scanId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->scanId) {
            $res['scanId'] = $this->scanId;
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
        if (isset($map['scanId'])) {
            $model->scanId = $map['scanId'];
        }

        return $model;
    }
}
