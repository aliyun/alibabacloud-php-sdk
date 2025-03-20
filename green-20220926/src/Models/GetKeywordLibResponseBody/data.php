<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetKeywordLibResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-01-29 10:26:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 100
     *
     * @var string
     */
    public $keywordCount;

    /**
     * @example customxx_xxx
     *
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;

    /**
     * @example 1825457112123838
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'gmtModified' => 'GmtModified',
        'keywordCount' => 'KeywordCount',
        'libId' => 'LibId',
        'libName' => 'LibName',
        'uid' => 'Uid',
    ];

    public function validate() {}

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
