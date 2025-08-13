<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class PocSendDataRequest extends Model
{
    /**
     * @var int
     */
    public $batchNo;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $paramsList;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'batchNo' => 'BatchNo',
        'lang' => 'Lang',
        'paramsList' => 'ParamsList',
        'regId' => 'RegId',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchNo) {
            $res['BatchNo'] = $this->batchNo;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->paramsList) {
            $res['ParamsList'] = $this->paramsList;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['BatchNo'])) {
            $model->batchNo = $map['BatchNo'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ParamsList'])) {
            $model->paramsList = $map['ParamsList'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
