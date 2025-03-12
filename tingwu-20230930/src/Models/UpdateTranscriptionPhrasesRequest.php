<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models;

use AlibabaCloud\Tea\Model;

class UpdateTranscriptionPhrasesRequest extends Model
{
    /**
     * @example custom fruit phrases list
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example fruit_phrase
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example {"苹果":3,"西瓜":3}
     *
     * @var string
     */
    public $wordWeights;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'wordWeights' => 'WordWeights',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->wordWeights) {
            $res['WordWeights'] = $this->wordWeights;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTranscriptionPhrasesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WordWeights'])) {
            $model->wordWeights = $map['WordWeights'];
        }

        return $model;
    }
}
