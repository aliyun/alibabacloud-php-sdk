<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class AddTagsToCardRequest extends Model
{
    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @var string[]
     */
    public $tagNameList;
    protected $_name = [
        'iccid'       => 'Iccid',
        'tagNameList' => 'TagNameList',
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
        if (null !== $this->tagNameList) {
            $res['TagNameList'] = $this->tagNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTagsToCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['TagNameList'])) {
            if (!empty($map['TagNameList'])) {
                $model->tagNameList = $map['TagNameList'];
            }
        }

        return $model;
    }
}
