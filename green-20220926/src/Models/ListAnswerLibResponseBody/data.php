<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListAnswerLibResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $answerCount;

    /**
     * @example 2024-06-03 18:15:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example alxxx
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
     * @example 1643953****74290
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'answerCount' => 'AnswerCount',
        'gmtModified' => 'GmtModified',
        'libId' => 'LibId',
        'libName' => 'LibName',
        'uid' => 'Uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerCount) {
            $res['AnswerCount'] = $this->answerCount;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (isset($map['AnswerCount'])) {
            $model->answerCount = $map['AnswerCount'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
