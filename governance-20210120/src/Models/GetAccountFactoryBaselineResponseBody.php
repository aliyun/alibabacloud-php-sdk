<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\GetAccountFactoryBaselineResponseBody\baselineItems;
use AlibabaCloud\Tea\Model;

class GetAccountFactoryBaselineResponseBody extends Model
{
    /**
     * @description The baseline ID.
     *
     * @example afb-bp16ae2k8a3yo3d*****
     *
     * @var string
     */
    public $baselineId;

    /**
     * @description The baseline items.
     *
     * @var baselineItems[]
     */
    public $baselineItems;

    /**
     * @description The name of the baseline.
     *
     * @example Default
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description The time when the baseline was created.
     *
     * @example 2022-11-28T00:46:34Z
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
     * @description The request ID.
     *
     * @example 60D54503-F1F6-51B6-B6FA-A70CBDA2A68C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the baseline. Valid values:
     *
     *   System: default baseline.
     *   Custom: custom baseline.
     *
     * @example Custom
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the baseline was updated.
     *
     * @example 2022-11-02T01:00:07Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'baselineId'    => 'BaselineId',
        'baselineItems' => 'BaselineItems',
        'baselineName'  => 'BaselineName',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'requestId'     => 'RequestId',
        'type'          => 'Type',
        'updateTime'    => 'UpdateTime',
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
        if (null !== $this->baselineItems) {
            $res['BaselineItems'] = [];
            if (null !== $this->baselineItems && \is_array($this->baselineItems)) {
                $n = 0;
                foreach ($this->baselineItems as $item) {
                    $res['BaselineItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetAccountFactoryBaselineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineItems'])) {
            if (!empty($map['BaselineItems'])) {
                $model->baselineItems = [];
                $n                    = 0;
                foreach ($map['BaselineItems'] as $item) {
                    $model->baselineItems[$n++] = null !== $item ? baselineItems::fromMap($item) : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
