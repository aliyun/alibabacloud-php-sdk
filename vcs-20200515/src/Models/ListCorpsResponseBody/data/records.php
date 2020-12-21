<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListCorpsResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $parentCorpId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var int
     */
    public $acuUsed;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $iconPath;

    /**
     * @var int
     */
    public $deviceCount;
    protected $_name = [
        'parentCorpId' => 'ParentCorpId',
        'appName'      => 'AppName',
        'isvSubId'     => 'IsvSubId',
        'description'  => 'Description',
        'corpName'     => 'CorpName',
        'corpId'       => 'CorpId',
        'acuUsed'      => 'AcuUsed',
        'createDate'   => 'CreateDate',
        'iconPath'     => 'IconPath',
        'deviceCount'  => 'DeviceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentCorpId) {
            $res['ParentCorpId'] = $this->parentCorpId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->acuUsed) {
            $res['AcuUsed'] = $this->acuUsed;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->iconPath) {
            $res['IconPath'] = $this->iconPath;
        }
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentCorpId'])) {
            $model->parentCorpId = $map['ParentCorpId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['AcuUsed'])) {
            $model->acuUsed = $map['AcuUsed'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['IconPath'])) {
            $model->iconPath = $map['IconPath'];
        }
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }

        return $model;
    }
}
