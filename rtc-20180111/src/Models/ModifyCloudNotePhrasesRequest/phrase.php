<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCloudNotePhrasesRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCloudNotePhrasesRequest\phrase\wordWeights;
use AlibabaCloud\Tea\Model;

class phrase extends Model
{
    /**
     * @example 水果描述
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 1qasw23ezcsrfsawq
     *
     * @var string
     */
    public $id;

    /**
     * @description This parameter is required.
     *
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
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'wordWeights' => 'WordWeights',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return phrase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
