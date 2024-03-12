<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselinesResponseBody;

use AlibabaCloud\Tea\Model;

class baselines extends Model
{
    /**
     * @description The baseline ID.
     *
     * @example afb-bp1durvn3lgqe28v****
     *
     * @var string
     */
    public $baselineId;

    /**
     * @description The name of the baseline.
     *
     * @example Default
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description The time at which the baseline was created.
     *
     * @example 2021-11-30T09:09:28Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the baseline.
     *
     * @example Default baseline
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the baseline. Valid values:
     *
     *   System: default baseline
     *   Custom: custom baseline
     *
     * @example Custom
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the baseline was updated.
     *
     * @example 2022-12-29T07:08:40Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'baselineId'   => 'BaselineId',
        'baselineName' => 'BaselineName',
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'type'         => 'Type',
        'updateTime'   => 'UpdateTime',
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
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
