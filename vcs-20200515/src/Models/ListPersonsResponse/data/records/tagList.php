<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonsResponse\data\records;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $tagValueId;
    protected $_name = [
        'tagCode'    => 'TagCode',
        'tagName'    => 'TagName',
        'tagValue'   => 'TagValue',
        'tagValueId' => 'TagValueId',
    ];

    public function validate()
    {
        Model::validateRequired('tagCode', $this->tagCode, true);
        Model::validateRequired('tagName', $this->tagName, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
        Model::validateRequired('tagValueId', $this->tagValueId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->tagValueId) {
            $res['TagValueId'] = $this->tagValueId;
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
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['TagValueId'])) {
            $model->tagValueId = $map['TagValueId'];
        }

        return $model;
    }
}
