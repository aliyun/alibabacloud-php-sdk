<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ExportVulRequest extends Model
{
    /**
     * @var string
     */
    public $aliasName;
    /**
     * @var string
     */
    public $attachTypes;
    /**
     * @var string
     */
    public $containerName;
    /**
     * @var int
     */
    public $createTsEnd;
    /**
     * @var int
     */
    public $createTsStart;
    /**
     * @var string
     */
    public $cveId;
    /**
     * @var string
     */
    public $dealed;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $imageName;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $necessity;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $searchTags;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $uuids;
    /**
     * @var string
     */
    public $vpcInstanceIds;
    protected $_name = [
        'aliasName'      => 'AliasName',
        'attachTypes'    => 'AttachTypes',
        'containerName'  => 'ContainerName',
        'createTsEnd'    => 'CreateTsEnd',
        'createTsStart'  => 'CreateTsStart',
        'cveId'          => 'CveId',
        'dealed'         => 'Dealed',
        'groupId'        => 'GroupId',
        'imageName'      => 'ImageName',
        'lang'           => 'Lang',
        'necessity'      => 'Necessity',
        'path'           => 'Path',
        'searchTags'     => 'SearchTags',
        'type'           => 'Type',
        'uuids'          => 'Uuids',
        'vpcInstanceIds' => 'VpcInstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->attachTypes) {
            $res['AttachTypes'] = $this->attachTypes;
        }

        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }

        if (null !== $this->createTsEnd) {
            $res['CreateTsEnd'] = $this->createTsEnd;
        }

        if (null !== $this->createTsStart) {
            $res['CreateTsStart'] = $this->createTsStart;
        }

        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }

        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->searchTags) {
            $res['SearchTags'] = $this->searchTags;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        if (null !== $this->vpcInstanceIds) {
            $res['VpcInstanceIds'] = $this->vpcInstanceIds;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['AttachTypes'])) {
            $model->attachTypes = $map['AttachTypes'];
        }

        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }

        if (isset($map['CreateTsEnd'])) {
            $model->createTsEnd = $map['CreateTsEnd'];
        }

        if (isset($map['CreateTsStart'])) {
            $model->createTsStart = $map['CreateTsStart'];
        }

        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }

        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['SearchTags'])) {
            $model->searchTags = $map['SearchTags'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        if (isset($map['VpcInstanceIds'])) {
            $model->vpcInstanceIds = $map['VpcInstanceIds'];
        }

        return $model;
    }
}
