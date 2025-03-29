<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListAnswerLibResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $answerCount;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $libName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
