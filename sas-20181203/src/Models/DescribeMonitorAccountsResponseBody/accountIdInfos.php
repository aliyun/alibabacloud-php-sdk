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
    public $isCloudSiemAccount;

    /**
     * @var string
     */
    public $isSasAccount;

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

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $isMarked;
    protected $_name = [
        'accountId' => 'AccountId',
        'addTime' => 'AddTime',
        'isCloudSiemAccount' => 'IsCloudSiemAccount',
        'isSasAccount' => 'IsSasAccount',
        'operatorUid' => 'OperatorUid',
        'postBasicService' => 'PostBasicService',
        'sasVersion' => 'SasVersion',
        'aliUid' => 'aliUid',
        'isMarked' => 'isMarked',
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

        if (null !== $this->isCloudSiemAccount) {
            $res['IsCloudSiemAccount'] = $this->isCloudSiemAccount;
        }

        if (null !== $this->isSasAccount) {
            $res['IsSasAccount'] = $this->isSasAccount;
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

        if (null !== $this->aliUid) {
            $res['aliUid'] = $this->aliUid;
        }

        if (null !== $this->isMarked) {
            $res['isMarked'] = $this->isMarked;
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

        if (isset($map['IsCloudSiemAccount'])) {
            $model->isCloudSiemAccount = $map['IsCloudSiemAccount'];
        }

        if (isset($map['IsSasAccount'])) {
            $model->isSasAccount = $map['IsSasAccount'];
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

        if (isset($map['aliUid'])) {
            $model->aliUid = $map['aliUid'];
        }

        if (isset($map['isMarked'])) {
            $model->isMarked = $map['isMarked'];
        }

        return $model;
    }
}
