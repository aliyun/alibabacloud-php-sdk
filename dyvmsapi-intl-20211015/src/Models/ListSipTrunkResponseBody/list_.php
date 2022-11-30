<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListSipTrunkResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $applyNote;

    /**
     * @var string
     */
    public $auditNote;

    /**
     * @var string
     */
    public $auditTs;

    /**
     * @var string
     */
    public $commitTs;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $inboundIpPorts;

    /**
     * @var string
     */
    public $outboundIps;

    /**
     * @var string
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTs;

    /**
     * @var string
     */
    public $userUuid;
    protected $_name = [
        'applyId'         => 'ApplyId',
        'applyNote'       => 'ApplyNote',
        'auditNote'       => 'AuditNote',
        'auditTs'         => 'AuditTs',
        'commitTs'        => 'CommitTs',
        'countryId'       => 'CountryId',
        'inboundIpPorts'  => 'InboundIpPorts',
        'outboundIps'     => 'OutboundIps',
        'qualificationId' => 'QualificationId',
        'scene'           => 'Scene',
        'status'          => 'Status',
        'updateTs'        => 'UpdateTs',
        'userUuid'        => 'UserUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->applyNote) {
            $res['ApplyNote'] = $this->applyNote;
        }
        if (null !== $this->auditNote) {
            $res['AuditNote'] = $this->auditNote;
        }
        if (null !== $this->auditTs) {
            $res['AuditTs'] = $this->auditTs;
        }
        if (null !== $this->commitTs) {
            $res['CommitTs'] = $this->commitTs;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->inboundIpPorts) {
            $res['InboundIpPorts'] = $this->inboundIpPorts;
        }
        if (null !== $this->outboundIps) {
            $res['OutboundIps'] = $this->outboundIps;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTs) {
            $res['UpdateTs'] = $this->updateTs;
        }
        if (null !== $this->userUuid) {
            $res['UserUuid'] = $this->userUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }
        if (isset($map['ApplyNote'])) {
            $model->applyNote = $map['ApplyNote'];
        }
        if (isset($map['AuditNote'])) {
            $model->auditNote = $map['AuditNote'];
        }
        if (isset($map['AuditTs'])) {
            $model->auditTs = $map['AuditTs'];
        }
        if (isset($map['CommitTs'])) {
            $model->commitTs = $map['CommitTs'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['InboundIpPorts'])) {
            $model->inboundIpPorts = $map['InboundIpPorts'];
        }
        if (isset($map['OutboundIps'])) {
            $model->outboundIps = $map['OutboundIps'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTs'])) {
            $model->updateTs = $map['UpdateTs'];
        }
        if (isset($map['UserUuid'])) {
            $model->userUuid = $map['UserUuid'];
        }

        return $model;
    }
}
