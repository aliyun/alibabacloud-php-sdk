<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSampleDataListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $classificationType;

    /**
     * @var string
     */
    public $dataDistributed;

    /**
     * @var string
     */
    public $dataTitle;

    /**
     * @var string
     */
    public $deleteTag;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $normalSize;

    /**
     * @var string
     */
    public $recallConfig;

    /**
     * @var int
     */
    public $riskSize;

    /**
     * @var string
     */
    public $riskValue;

    /**
     * @var string
     */
    public $sampleLabelDetail;

    /**
     * @var int
     */
    public $sampleSize;

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
    public $storePath;

    /**
     * @var string
     */
    public $storeType;

    /**
     * @var string
     */
    public $supportRecall;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'classificationType' => 'classificationType',
        'dataDistributed'    => 'dataDistributed',
        'dataTitle'          => 'dataTitle',
        'deleteTag'          => 'deleteTag',
        'description'        => 'description',
        'gmtCreate'          => 'gmtCreate',
        'gmtModified'        => 'gmtModified',
        'id'                 => 'id',
        'name'               => 'name',
        'normalSize'         => 'normalSize',
        'recallConfig'       => 'recallConfig',
        'riskSize'           => 'riskSize',
        'riskValue'          => 'riskValue',
        'sampleLabelDetail'  => 'sampleLabelDetail',
        'sampleSize'         => 'sampleSize',
        'scene'              => 'scene',
        'status'             => 'status',
        'storePath'          => 'storePath',
        'storeType'          => 'storeType',
        'supportRecall'      => 'supportRecall',
        'userId'             => 'userId',
        'version'            => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationType) {
            $res['classificationType'] = $this->classificationType;
        }
        if (null !== $this->dataDistributed) {
            $res['dataDistributed'] = $this->dataDistributed;
        }
        if (null !== $this->dataTitle) {
            $res['dataTitle'] = $this->dataTitle;
        }
        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->normalSize) {
            $res['normalSize'] = $this->normalSize;
        }
        if (null !== $this->recallConfig) {
            $res['recallConfig'] = $this->recallConfig;
        }
        if (null !== $this->riskSize) {
            $res['riskSize'] = $this->riskSize;
        }
        if (null !== $this->riskValue) {
            $res['riskValue'] = $this->riskValue;
        }
        if (null !== $this->sampleLabelDetail) {
            $res['sampleLabelDetail'] = $this->sampleLabelDetail;
        }
        if (null !== $this->sampleSize) {
            $res['sampleSize'] = $this->sampleSize;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->storePath) {
            $res['storePath'] = $this->storePath;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }
        if (null !== $this->supportRecall) {
            $res['supportRecall'] = $this->supportRecall;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['classificationType'])) {
            $model->classificationType = $map['classificationType'];
        }
        if (isset($map['dataDistributed'])) {
            $model->dataDistributed = $map['dataDistributed'];
        }
        if (isset($map['dataTitle'])) {
            $model->dataTitle = $map['dataTitle'];
        }
        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['normalSize'])) {
            $model->normalSize = $map['normalSize'];
        }
        if (isset($map['recallConfig'])) {
            $model->recallConfig = $map['recallConfig'];
        }
        if (isset($map['riskSize'])) {
            $model->riskSize = $map['riskSize'];
        }
        if (isset($map['riskValue'])) {
            $model->riskValue = $map['riskValue'];
        }
        if (isset($map['sampleLabelDetail'])) {
            $model->sampleLabelDetail = $map['sampleLabelDetail'];
        }
        if (isset($map['sampleSize'])) {
            $model->sampleSize = $map['sampleSize'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['storePath'])) {
            $model->storePath = $map['storePath'];
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }
        if (isset($map['supportRecall'])) {
            $model->supportRecall = $map['supportRecall'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
