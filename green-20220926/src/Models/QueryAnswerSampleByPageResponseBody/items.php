<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @example 2023-07-31 06:16:06
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1666
     *
     * @var int
     */
    public $id;

    /**
     * @example custom_xxxx
     *
     * @var string
     */
    public $libId;

    /**
     * @description UID。
     *
     * @example 104813*****2399
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'answer' => 'Answer',
        'gmtCreate' => 'GmtCreate',
        'id' => 'Id',
        'libId' => 'LibId',
        'uid' => 'Uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
