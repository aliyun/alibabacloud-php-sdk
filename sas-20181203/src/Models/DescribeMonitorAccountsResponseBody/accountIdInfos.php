<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeMonitorAccountsResponseBody;

use AlibabaCloud\Dara\Model;

class accountIdInfos extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $addTime;

    /**
     * @var string
     */
    public $operatorUid;

    /**
     * @var int
     */
    public $postBasicService;

    /**
     * @var string
     */
    public $sasVersion;
    protected $_name = [
        'accountId' => 'AccountId',
        'addTime' => 'AddTime',
        'operatorUid' => 'OperatorUid',
        'postBasicService' => 'PostBasicService',
        'sasVersion' => 'SasVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }

        if (null !== $this->operatorUid) {
            $res['OperatorUid'] = $this->operatorUid;
        }

        if (null !== $this->postBasicService) {
            $res['PostBasicService'] = $this->postBasicService;
        }

        if (null !== $this->sasVersion) {
            $res['SasVersion'] = $this->sasVersion;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }

        if (isset($map['OperatorUid'])) {
            $model->operatorUid = $map['OperatorUid'];
        }

        if (isset($map['PostBasicService'])) {
            $model->postBasicService = $map['PostBasicService'];
        }

        if (isset($map['SasVersion'])) {
            $model->sasVersion = $map['SasVersion'];
        }

        return $model;
    }
}
