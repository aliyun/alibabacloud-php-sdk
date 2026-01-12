<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryLocationServiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $svcDeployStatus;

    /**
     * @var string
     */
    public $svcState;

    /**
     * @var string
     */
    public $treeConfig;

    /**
     * @var string
     */
    public $uuidLogMap;
    protected $_name = [
        'appId' => 'AppId',
        'expireTime' => 'ExpireTime',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'name' => 'Name',
        'note' => 'Note',
        'qps' => 'Qps',
        'startTime' => 'StartTime',
        'svcDeployStatus' => 'SvcDeployStatus',
        'svcState' => 'SvcState',
        'treeConfig' => 'TreeConfig',
        'uuidLogMap' => 'UuidLogMap',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->svcDeployStatus) {
            $res['SvcDeployStatus'] = $this->svcDeployStatus;
        }

        if (null !== $this->svcState) {
            $res['SvcState'] = $this->svcState;
        }

        if (null !== $this->treeConfig) {
            $res['TreeConfig'] = $this->treeConfig;
        }

        if (null !== $this->uuidLogMap) {
            $res['UuidLogMap'] = $this->uuidLogMap;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SvcDeployStatus'])) {
            $model->svcDeployStatus = $map['SvcDeployStatus'];
        }

        if (isset($map['SvcState'])) {
            $model->svcState = $map['SvcState'];
        }

        if (isset($map['TreeConfig'])) {
            $model->treeConfig = $map['TreeConfig'];
        }

        if (isset($map['UuidLogMap'])) {
            $model->uuidLogMap = $map['UuidLogMap'];
        }

        return $model;
    }
}
