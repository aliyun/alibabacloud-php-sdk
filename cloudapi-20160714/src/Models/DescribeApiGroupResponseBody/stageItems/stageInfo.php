<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody\stageItems;

use AlibabaCloud\Tea\Model;

class stageInfo extends Model
{
    /**
     * @description The environment description.
     *
     * @example MYTEST
     *
     * @var string
     */
    public $description;

    /**
     * @description The environment ID.
     *
     * @example 123e8dc7bbe01613b5b1d726c2a7888e
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The environment name.
     *
     * @example TEST
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'description' => 'Description',
        'stageId'     => 'StageId',
        'stageName'   => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
