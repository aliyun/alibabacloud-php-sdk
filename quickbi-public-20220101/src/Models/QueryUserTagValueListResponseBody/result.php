<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserTagValueListResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $tagId;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagId' => 'TagId',
        'tagName' => 'TagName',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
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
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
