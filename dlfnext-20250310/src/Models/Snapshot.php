<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Snapshot extends Model
{
    /**
     * @var string
     */
    public $baseManifestList;

    /**
     * @var string
     */
    public $changelogManifestList;

    /**
     * @var int
     */
    public $changelogRecordCount;

    /**
     * @var int
     */
    public $commitIdentifier;

    /**
     * @var string
     */
    public $commitKind;

    /**
     * @var string
     */
    public $commitUser;

    /**
     * @var string
     */
    public $deltaManifestList;

    /**
     * @var int
     */
    public $deltaRecordCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $idString;

    /**
     * @var string
     */
    public $indexManifest;

    /**
     * @var int[]
     */
    public $logOffsets;

    /**
     * @var string
     */
    public $parentIdString;

    /**
     * @var int
     */
    public $schemaId;

    /**
     * @var int
     */
    public $sequenceNumber;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string[]
     */
    public $summary;

    /**
     * @var int
     */
    public $timeMillis;

    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $watermark;
    protected $_name = [
        'baseManifestList' => 'baseManifestList',
        'changelogManifestList' => 'changelogManifestList',
        'changelogRecordCount' => 'changelogRecordCount',
        'commitIdentifier' => 'commitIdentifier',
        'commitKind' => 'commitKind',
        'commitUser' => 'commitUser',
        'deltaManifestList' => 'deltaManifestList',
        'deltaRecordCount' => 'deltaRecordCount',
        'id' => 'id',
        'idString' => 'idString',
        'indexManifest' => 'indexManifest',
        'logOffsets' => 'logOffsets',
        'parentIdString' => 'parentIdString',
        'schemaId' => 'schemaId',
        'sequenceNumber' => 'sequenceNumber',
        'statistics' => 'statistics',
        'summary' => 'summary',
        'timeMillis' => 'timeMillis',
        'totalRecordCount' => 'totalRecordCount',
        'version' => 'version',
        'watermark' => 'watermark',
    ];

    public function validate()
    {
        if (\is_array($this->logOffsets)) {
            Model::validateArray($this->logOffsets);
        }
        if (\is_array($this->summary)) {
            Model::validateArray($this->summary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseManifestList) {
            $res['baseManifestList'] = $this->baseManifestList;
        }

        if (null !== $this->changelogManifestList) {
            $res['changelogManifestList'] = $this->changelogManifestList;
        }

        if (null !== $this->changelogRecordCount) {
            $res['changelogRecordCount'] = $this->changelogRecordCount;
        }

        if (null !== $this->commitIdentifier) {
            $res['commitIdentifier'] = $this->commitIdentifier;
        }

        if (null !== $this->commitKind) {
            $res['commitKind'] = $this->commitKind;
        }

        if (null !== $this->commitUser) {
            $res['commitUser'] = $this->commitUser;
        }

        if (null !== $this->deltaManifestList) {
            $res['deltaManifestList'] = $this->deltaManifestList;
        }

        if (null !== $this->deltaRecordCount) {
            $res['deltaRecordCount'] = $this->deltaRecordCount;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->idString) {
            $res['idString'] = $this->idString;
        }

        if (null !== $this->indexManifest) {
            $res['indexManifest'] = $this->indexManifest;
        }

        if (null !== $this->logOffsets) {
            if (\is_array($this->logOffsets)) {
                $res['logOffsets'] = [];
                foreach ($this->logOffsets as $key1 => $value1) {
                    $res['logOffsets'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->parentIdString) {
            $res['parentIdString'] = $this->parentIdString;
        }

        if (null !== $this->schemaId) {
            $res['schemaId'] = $this->schemaId;
        }

        if (null !== $this->sequenceNumber) {
            $res['sequenceNumber'] = $this->sequenceNumber;
        }

        if (null !== $this->statistics) {
            $res['statistics'] = $this->statistics;
        }

        if (null !== $this->summary) {
            if (\is_array($this->summary)) {
                $res['summary'] = [];
                foreach ($this->summary as $key1 => $value1) {
                    $res['summary'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->timeMillis) {
            $res['timeMillis'] = $this->timeMillis;
        }

        if (null !== $this->totalRecordCount) {
            $res['totalRecordCount'] = $this->totalRecordCount;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->watermark) {
            $res['watermark'] = $this->watermark;
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
        if (isset($map['baseManifestList'])) {
            $model->baseManifestList = $map['baseManifestList'];
        }

        if (isset($map['changelogManifestList'])) {
            $model->changelogManifestList = $map['changelogManifestList'];
        }

        if (isset($map['changelogRecordCount'])) {
            $model->changelogRecordCount = $map['changelogRecordCount'];
        }

        if (isset($map['commitIdentifier'])) {
            $model->commitIdentifier = $map['commitIdentifier'];
        }

        if (isset($map['commitKind'])) {
            $model->commitKind = $map['commitKind'];
        }

        if (isset($map['commitUser'])) {
            $model->commitUser = $map['commitUser'];
        }

        if (isset($map['deltaManifestList'])) {
            $model->deltaManifestList = $map['deltaManifestList'];
        }

        if (isset($map['deltaRecordCount'])) {
            $model->deltaRecordCount = $map['deltaRecordCount'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['idString'])) {
            $model->idString = $map['idString'];
        }

        if (isset($map['indexManifest'])) {
            $model->indexManifest = $map['indexManifest'];
        }

        if (isset($map['logOffsets'])) {
            if (!empty($map['logOffsets'])) {
                $model->logOffsets = [];
                foreach ($map['logOffsets'] as $key1 => $value1) {
                    $model->logOffsets[$key1] = $value1;
                }
            }
        }

        if (isset($map['parentIdString'])) {
            $model->parentIdString = $map['parentIdString'];
        }

        if (isset($map['schemaId'])) {
            $model->schemaId = $map['schemaId'];
        }

        if (isset($map['sequenceNumber'])) {
            $model->sequenceNumber = $map['sequenceNumber'];
        }

        if (isset($map['statistics'])) {
            $model->statistics = $map['statistics'];
        }

        if (isset($map['summary'])) {
            if (!empty($map['summary'])) {
                $model->summary = [];
                foreach ($map['summary'] as $key1 => $value1) {
                    $model->summary[$key1] = $value1;
                }
            }
        }

        if (isset($map['timeMillis'])) {
            $model->timeMillis = $map['timeMillis'];
        }

        if (isset($map['totalRecordCount'])) {
            $model->totalRecordCount = $map['totalRecordCount'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['watermark'])) {
            $model->watermark = $map['watermark'];
        }

        return $model;
    }
}
