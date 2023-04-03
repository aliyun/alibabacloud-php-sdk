<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class AddTagsToCardShrinkRequest extends Model
{
    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $tagNameListShrink;
    protected $_name = [
        'iccid'             => 'Iccid',
        'tagNameListShrink' => 'TagNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->tagNameListShrink) {
            $res['TagNameList'] = $this->tagNameListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTagsToCardShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['TagNameList'])) {
            $model->tagNameListShrink = $map['TagNameList'];
        }

        return $model;
    }
}
