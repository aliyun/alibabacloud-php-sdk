<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\SearchProjectsByRegionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $aoneType;

    /**
     * @var string
     */
    public $stamp;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string[]
     */
    public $icons;

    /**
     * @var string
     */
    public $idPath;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $aoneId;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $customFieldMap;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'         => 'Status',
        'type'           => 'Type',
        'aoneType'       => 'AoneType',
        'stamp'          => 'Stamp',
        'fullName'       => 'FullName',
        'icons'          => 'Icons',
        'idPath'         => 'IdPath',
        'mode'           => 'Mode',
        'aoneId'         => 'AoneId',
        'parentId'       => 'ParentId',
        'description'    => 'Description',
        'customFieldMap' => 'CustomFieldMap',
        'name'           => 'Name',
        'id'             => 'Id',
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
        if (null !== $this->aoneType) {
            $res['AoneType'] = $this->aoneType;
        }
        if (null !== $this->stamp) {
            $res['Stamp'] = $this->stamp;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->icons) {
            $res['Icons'] = $this->icons;
        }
        if (null !== $this->idPath) {
            $res['IdPath'] = $this->idPath;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->aoneId) {
            $res['AoneId'] = $this->aoneId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->customFieldMap) {
            $res['CustomFieldMap'] = $this->customFieldMap;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['AoneType'])) {
            $model->aoneType = $map['AoneType'];
        }
        if (isset($map['Stamp'])) {
            $model->stamp = $map['Stamp'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['Icons'])) {
            if (!empty($map['Icons'])) {
                $model->icons = $map['Icons'];
            }
        }
        if (isset($map['IdPath'])) {
            $model->idPath = $map['IdPath'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['AoneId'])) {
            $model->aoneId = $map['AoneId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CustomFieldMap'])) {
            if (!empty($map['CustomFieldMap'])) {
                $model->customFieldMap = $map['CustomFieldMap'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
