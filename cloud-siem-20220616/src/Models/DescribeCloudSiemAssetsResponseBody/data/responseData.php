<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsResponseBody\data\responseData\assetInfo;

class responseData extends Model
{
    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var assetInfo[]
     */
    public $assetInfo;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $cloudCode;

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
     * @var string
     */
    public $incidentUuid;

    /**
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'alertUuid' => 'AlertUuid',
        'aliuid' => 'Aliuid',
        'assetId' => 'AssetId',
        'assetInfo' => 'AssetInfo',
        'assetName' => 'AssetName',
        'assetType' => 'AssetType',
        'cloudCode' => 'CloudCode',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'incidentUuid' => 'IncidentUuid',
        'subUserId' => 'SubUserId',
    ];

    public function validate()
    {
        if (\is_array($this->assetInfo)) {
            Model::validateArray($this->assetInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }

        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }

        if (null !== $this->assetInfo) {
            if (\is_array($this->assetInfo)) {
                $res['AssetInfo'] = [];
                $n1 = 0;
                foreach ($this->assetInfo as $item1) {
                    $res['AssetInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->cloudCode) {
            $res['CloudCode'] = $this->cloudCode;
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

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
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
        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }

        if (isset($map['AssetInfo'])) {
            if (!empty($map['AssetInfo'])) {
                $model->assetInfo = [];
                $n1 = 0;
                foreach ($map['AssetInfo'] as $item1) {
                    $model->assetInfo[$n1++] = assetInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CloudCode'])) {
            $model->cloudCode = $map['CloudCode'];
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

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
