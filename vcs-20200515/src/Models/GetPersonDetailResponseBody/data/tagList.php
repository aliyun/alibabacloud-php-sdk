<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @var string
     */
    public $tagValueId;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagValueId' => 'TagValueId',
        'tagName'    => 'TagName',
        'tagCode'    => 'TagCode',
        'tagValue'   => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagValueId) {
            $res['TagValueId'] = $this->tagValueId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagValueId'])) {
            $model->tagValueId = $map['TagValueId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
