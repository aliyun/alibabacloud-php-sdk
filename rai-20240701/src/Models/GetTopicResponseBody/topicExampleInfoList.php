<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetTopicResponseBody;

use AlibabaCloud\Dara\Model;

class topicExampleInfoList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $exampleId;

    /**
     * @var int
     */
    public $exampleType;
    protected $_name = [
        'content' => 'Content',
        'exampleId' => 'ExampleId',
        'exampleType' => 'ExampleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->exampleId) {
            $res['ExampleId'] = $this->exampleId;
        }

        if (null !== $this->exampleType) {
            $res['ExampleType'] = $this->exampleType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ExampleId'])) {
            $model->exampleId = $map['ExampleId'];
        }

        if (isset($map['ExampleType'])) {
            $model->exampleType = $map['ExampleType'];
        }

        return $model;
    }
}
