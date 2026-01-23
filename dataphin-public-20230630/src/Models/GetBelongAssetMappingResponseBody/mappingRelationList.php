<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBelongAssetMappingResponseBody;

use AlibabaCloud\Dara\Model;

class mappingRelationList extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $standardCode;

    /**
     * @var int
     */
    public $standardId;

    /**
     * @var string
     */
    public $standardName;

    /**
     * @var string
     */
    public $standardSetDirectory;

    /**
     * @var int
     */
    public $standardSetId;

    /**
     * @var string
     */
    public $standardSetName;

    /**
     * @var string
     */
    public $standardStage;
    protected $_name = [
        'assetType' => 'AssetType',
        'guid' => 'Guid',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'standardCode' => 'StandardCode',
        'standardId' => 'StandardId',
        'standardName' => 'StandardName',
        'standardSetDirectory' => 'StandardSetDirectory',
        'standardSetId' => 'StandardSetId',
        'standardSetName' => 'StandardSetName',
        'standardStage' => 'StandardStage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->standardCode) {
            $res['StandardCode'] = $this->standardCode;
        }

        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }

        if (null !== $this->standardName) {
            $res['StandardName'] = $this->standardName;
        }

        if (null !== $this->standardSetDirectory) {
            $res['StandardSetDirectory'] = $this->standardSetDirectory;
        }

        if (null !== $this->standardSetId) {
            $res['StandardSetId'] = $this->standardSetId;
        }

        if (null !== $this->standardSetName) {
            $res['StandardSetName'] = $this->standardSetName;
        }

        if (null !== $this->standardStage) {
            $res['StandardStage'] = $this->standardStage;
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['StandardCode'])) {
            $model->standardCode = $map['StandardCode'];
        }

        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        if (isset($map['StandardName'])) {
            $model->standardName = $map['StandardName'];
        }

        if (isset($map['StandardSetDirectory'])) {
            $model->standardSetDirectory = $map['StandardSetDirectory'];
        }

        if (isset($map['StandardSetId'])) {
            $model->standardSetId = $map['StandardSetId'];
        }

        if (isset($map['StandardSetName'])) {
            $model->standardSetName = $map['StandardSetName'];
        }

        if (isset($map['StandardStage'])) {
            $model->standardStage = $map['StandardStage'];
        }

        return $model;
    }
}
