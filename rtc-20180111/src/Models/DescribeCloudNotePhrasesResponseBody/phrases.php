<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotePhrasesResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCloudNotePhrasesResponseBody\phrases\wordWeights;
use AlibabaCloud\Tea\Model;

class phrases extends Model
{
    /**
     * @example 2025-03-04T06:22:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 水果描述
     *
     * @var string
     */
    public $description;

    /**
     * @example 1qweadca332121212
     *
     * @var string
     */
    public $id;

    /**
     * @example 水果
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var wordWeights[]
     */
    public $wordWeights;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'wordWeights' => 'WordWeights',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->wordWeights) {
            $res['WordWeights'] = [];
            if (null !== $this->wordWeights && \is_array($this->wordWeights)) {
                $n = 0;
                foreach ($this->wordWeights as $item) {
                    $res['WordWeights'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phrases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WordWeights'])) {
            if (!empty($map['WordWeights'])) {
                $model->wordWeights = [];
                $n = 0;
                foreach ($map['WordWeights'] as $item) {
                    $model->wordWeights[$n++] = null !== $item ? wordWeights::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
