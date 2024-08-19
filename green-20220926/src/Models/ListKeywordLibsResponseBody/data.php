<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordLibsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2022-11-30 16:30:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 10
     *
     * @var string
     */
    public $keywordCount;

    /**
     * @example custom_xxxxx
     *
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;

    /**
     * @description UID。
     *
     * @example 19964*****086772
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'gmtModified'  => 'GmtModified',
        'keywordCount' => 'KeywordCount',
        'libId'        => 'LibId',
        'libName'      => 'LibName',
        'uid'          => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->keywordCount) {
            $res['KeywordCount'] = $this->keywordCount;
        }
        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }
        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['KeywordCount'])) {
            $model->keywordCount = $map['KeywordCount'];
        }
        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }
        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
