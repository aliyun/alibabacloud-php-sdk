<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180813\Models\ListPCAInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class PCAInstanceList extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $caIdentifier;

    /**
     * @var int
     */
    public $certCount;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceUuid;

    /**
     * @var int
     */
    public $issuedCertCount;

    /**
     * @var bool
     */
    public $relateStatus;

    /**
     * @var int
     */
    public $shareFlag;

    /**
     * @var string
     */
    public $trial;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'aliasName' => 'AliasName',
        'caIdentifier' => 'CaIdentifier',
        'certCount' => 'CertCount',
        'endTime' => 'EndTime',
        'instanceUuid' => 'InstanceUuid',
        'issuedCertCount' => 'IssuedCertCount',
        'relateStatus' => 'RelateStatus',
        'shareFlag' => 'ShareFlag',
        'trial' => 'Trial',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->caIdentifier) {
            $res['CaIdentifier'] = $this->caIdentifier;
        }

        if (null !== $this->certCount) {
            $res['CertCount'] = $this->certCount;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }

        if (null !== $this->issuedCertCount) {
            $res['IssuedCertCount'] = $this->issuedCertCount;
        }

        if (null !== $this->relateStatus) {
            $res['RelateStatus'] = $this->relateStatus;
        }

        if (null !== $this->shareFlag) {
            $res['ShareFlag'] = $this->shareFlag;
        }

        if (null !== $this->trial) {
            $res['Trial'] = $this->trial;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['CaIdentifier'])) {
            $model->caIdentifier = $map['CaIdentifier'];
        }

        if (isset($map['CertCount'])) {
            $model->certCount = $map['CertCount'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }

        if (isset($map['IssuedCertCount'])) {
            $model->issuedCertCount = $map['IssuedCertCount'];
        }

        if (isset($map['RelateStatus'])) {
            $model->relateStatus = $map['RelateStatus'];
        }

        if (isset($map['ShareFlag'])) {
            $model->shareFlag = $map['ShareFlag'];
        }

        if (isset($map['Trial'])) {
            $model->trial = $map['Trial'];
        }

        return $model;
    }
}
