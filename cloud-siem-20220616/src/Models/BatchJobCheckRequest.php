<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class BatchJobCheckRequest extends Model
{
    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the region where your assets reside.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The id of task.
     *
     * @example xxxxx_folder_xxxxxx
     *
     * @var string
     */
    public $submitId;
    protected $_name = [
        'regionId' => 'RegionId',
        'submitId' => 'SubmitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->submitId) {
            $res['SubmitId'] = $this->submitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchJobCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubmitId'])) {
            $model->submitId = $map['SubmitId'];
        }

        return $model;
    }
}
