<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetVideoResponseBody;

use AlibabaCloud\Tea\Model;

class videoTags extends Model
{
    /**
     * @var string
     */
    public $tagName;

    /**
     * @var float
     */
    public $tagConfidence;

    /**
     * @var int
     */
    public $tagLevel;

    /**
     * @var string
     */
    public $parentTagName;
    protected $_name = [
        'tagName'       => 'TagName',
        'tagConfidence' => 'TagConfidence',
        'tagLevel'      => 'TagLevel',
        'parentTagName' => 'ParentTagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagConfidence) {
            $res['TagConfidence'] = $this->tagConfidence;
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
     * @return videoTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagConfidence'])) {
            $model->tagConfidence = $map['TagConfidence'];
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
