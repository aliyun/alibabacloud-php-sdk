<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulListResponseBody\vulRecords\extendContentJson;
use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $modifyTs;

    /**
     * @var string
     */
    public $imageDigest;

    /**
     * @var string[]
     */
    public $layers;

    /**
     * @var int
     */
    public $primaryId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $related;

    /**
     * @var int
     */
    public $lastTs;

    /**
     * @var int
     */
    public $firstTs;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var extendContentJson
     */
    public $extendContentJson;
    protected $_name = [
        'status'            => 'Status',
        'type'              => 'Type',
        'modifyTs'          => 'ModifyTs',
        'imageDigest'       => 'ImageDigest',
        'layers'            => 'Layers',
        'primaryId'         => 'PrimaryId',
        'tag'               => 'Tag',
        'related'           => 'Related',
        'lastTs'            => 'LastTs',
        'firstTs'           => 'FirstTs',
        'necessity'         => 'Necessity',
        'uuid'              => 'Uuid',
        'aliasName'         => 'AliasName',
        'name'              => 'Name',
        'extendContentJson' => 'ExtendContentJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->modifyTs) {
            $res['ModifyTs'] = $this->modifyTs;
        }
        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }
        if (null !== $this->layers) {
            $res['Layers'] = $this->layers;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->firstTs) {
            $res['FirstTs'] = $this->firstTs;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->extendContentJson) {
            $res['ExtendContentJson'] = null !== $this->extendContentJson ? $this->extendContentJson->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ModifyTs'])) {
            $model->modifyTs = $map['ModifyTs'];
        }
        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }
        if (isset($map['Layers'])) {
            if (!empty($map['Layers'])) {
                $model->layers = $map['Layers'];
            }
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['FirstTs'])) {
            $model->firstTs = $map['FirstTs'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ExtendContentJson'])) {
            $model->extendContentJson = extendContentJson::fromMap($map['ExtendContentJson']);
        }

        return $model;
    }
}
