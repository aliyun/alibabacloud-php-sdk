<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveServiceResponse;

use AlibabaCloud\Tea\Model;

class cloudDriveServices extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $cdsChargeStatus;

    /**
     * @var string
     */
    public $cdsChargeType;

    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $cdsName;

    /**
     * @var string
     */
    public $cdsReleaseDeadline;

    /**
     * @var string
     */
    public $cdsStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var string
     */
    public $pdsAdministrator;

    /**
     * @var string
     */
    public $pdsDomainId;

    /**
     * @var string
     */
    public $pdsEndpoint;

    /**
     * @var string
     */
    public $pdsInitToken;

    /**
     * @var string
     */
    public $pdsProductName;

    /**
     * @var string
     */
    public $pdsSubdomainId;

    /**
     * @var string
     */
    public $pdsUrl;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliUid'             => 'AliUid',
        'cdsChargeStatus'    => 'CdsChargeStatus',
        'cdsChargeType'      => 'CdsChargeType',
        'cdsId'              => 'CdsId',
        'cdsName'            => 'CdsName',
        'cdsReleaseDeadline' => 'CdsReleaseDeadline',
        'cdsStatus'          => 'CdsStatus',
        'createTime'         => 'CreateTime',
        'maxSize'            => 'MaxSize',
        'meteredSize'        => 'MeteredSize',
        'pdsAdministrator'   => 'PdsAdministrator',
        'pdsDomainId'        => 'PdsDomainId',
        'pdsEndpoint'        => 'PdsEndpoint',
        'pdsInitToken'       => 'PdsInitToken',
        'pdsProductName'     => 'PdsProductName',
        'pdsSubdomainId'     => 'PdsSubdomainId',
        'pdsUrl'             => 'PdsUrl',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('aliUid', $this->aliUid, true);
        Model::validateRequired('cdsChargeStatus', $this->cdsChargeStatus, true);
        Model::validateRequired('cdsChargeType', $this->cdsChargeType, true);
        Model::validateRequired('cdsId', $this->cdsId, true);
        Model::validateRequired('cdsName', $this->cdsName, true);
        Model::validateRequired('cdsReleaseDeadline', $this->cdsReleaseDeadline, true);
        Model::validateRequired('cdsStatus', $this->cdsStatus, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('maxSize', $this->maxSize, true);
        Model::validateRequired('meteredSize', $this->meteredSize, true);
        Model::validateRequired('pdsAdministrator', $this->pdsAdministrator, true);
        Model::validateRequired('pdsDomainId', $this->pdsDomainId, true);
        Model::validateRequired('pdsEndpoint', $this->pdsEndpoint, true);
        Model::validateRequired('pdsInitToken', $this->pdsInitToken, true);
        Model::validateRequired('pdsProductName', $this->pdsProductName, true);
        Model::validateRequired('pdsSubdomainId', $this->pdsSubdomainId, true);
        Model::validateRequired('pdsUrl', $this->pdsUrl, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->cdsChargeStatus) {
            $res['CdsChargeStatus'] = $this->cdsChargeStatus;
        }
        if (null !== $this->cdsChargeType) {
            $res['CdsChargeType'] = $this->cdsChargeType;
        }
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->cdsName) {
            $res['CdsName'] = $this->cdsName;
        }
        if (null !== $this->cdsReleaseDeadline) {
            $res['CdsReleaseDeadline'] = $this->cdsReleaseDeadline;
        }
        if (null !== $this->cdsStatus) {
            $res['CdsStatus'] = $this->cdsStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->pdsAdministrator) {
            $res['PdsAdministrator'] = $this->pdsAdministrator;
        }
        if (null !== $this->pdsDomainId) {
            $res['PdsDomainId'] = $this->pdsDomainId;
        }
        if (null !== $this->pdsEndpoint) {
            $res['PdsEndpoint'] = $this->pdsEndpoint;
        }
        if (null !== $this->pdsInitToken) {
            $res['PdsInitToken'] = $this->pdsInitToken;
        }
        if (null !== $this->pdsProductName) {
            $res['PdsProductName'] = $this->pdsProductName;
        }
        if (null !== $this->pdsSubdomainId) {
            $res['PdsSubdomainId'] = $this->pdsSubdomainId;
        }
        if (null !== $this->pdsUrl) {
            $res['PdsUrl'] = $this->pdsUrl;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudDriveServices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CdsChargeStatus'])) {
            $model->cdsChargeStatus = $map['CdsChargeStatus'];
        }
        if (isset($map['CdsChargeType'])) {
            $model->cdsChargeType = $map['CdsChargeType'];
        }
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['CdsName'])) {
            $model->cdsName = $map['CdsName'];
        }
        if (isset($map['CdsReleaseDeadline'])) {
            $model->cdsReleaseDeadline = $map['CdsReleaseDeadline'];
        }
        if (isset($map['CdsStatus'])) {
            $model->cdsStatus = $map['CdsStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['PdsAdministrator'])) {
            $model->pdsAdministrator = $map['PdsAdministrator'];
        }
        if (isset($map['PdsDomainId'])) {
            $model->pdsDomainId = $map['PdsDomainId'];
        }
        if (isset($map['PdsEndpoint'])) {
            $model->pdsEndpoint = $map['PdsEndpoint'];
        }
        if (isset($map['PdsInitToken'])) {
            $model->pdsInitToken = $map['PdsInitToken'];
        }
        if (isset($map['PdsProductName'])) {
            $model->pdsProductName = $map['PdsProductName'];
        }
        if (isset($map['PdsSubdomainId'])) {
            $model->pdsSubdomainId = $map['PdsSubdomainId'];
        }
        if (isset($map['PdsUrl'])) {
            $model->pdsUrl = $map['PdsUrl'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
