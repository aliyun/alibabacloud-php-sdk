<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $parentTagEnName;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var float
     */
    public $tagConfidence;

    /**
     * @var string
     */
    public $tagEnName;

    /**
     * @var int
     */
    public $tagLevel;

    /**
     * @var string
     */
    public $parentTagName;
    protected $_name = [
        'parentTagEnName' => 'ParentTagEnName',
        'tagName'         => 'TagName',
        'tagConfidence'   => 'TagConfidence',
        'tagEnName'       => 'TagEnName',
        'tagLevel'        => 'TagLevel',
        'parentTagName'   => 'ParentTagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentTagEnName) {
            $res['ParentTagEnName'] = $this->parentTagEnName;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagConfidence) {
            $res['TagConfidence'] = $this->tagConfidence;
        }
        if (null !== $this->tagEnName) {
            $res['TagEnName'] = $this->tagEnName;
        }
        if (null !== $this->tagLevel) {
            $res['TagLevel'] = $this->tagLevel;
        }
        if (null !== $this->parentTagName) {
            $res['ParentTagName'] = $this->parentTagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentTagEnName'])) {
            $model->parentTagEnName = $map['ParentTagEnName'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagConfidence'])) {
            $model->tagConfidence = $map['TagConfidence'];
        }
        if (isset($map['TagEnName'])) {
            $model->tagEnName = $map['TagEnName'];
        }
        if (isset($map['TagLevel'])) {
            $model->tagLevel = $map['TagLevel'];
        }
        if (isset($map['ParentTagName'])) {
            $model->parentTagName = $map['ParentTagName'];
        }

        return $model;
    }
}
