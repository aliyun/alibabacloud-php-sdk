<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ExportVulRequest\vulEntityList;

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
     * @var int
     */
    public $raspDefend;

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

    /**
     * @var vulEntityList[]
     */
    public $vulEntityList;
    protected $_name = [
        'aliasName' => 'AliasName',
        'attachTypes' => 'AttachTypes',
        'containerName' => 'ContainerName',
        'createTsEnd' => 'CreateTsEnd',
        'createTsStart' => 'CreateTsStart',
        'cveId' => 'CveId',
        'dealed' => 'Dealed',
        'groupId' => 'GroupId',
        'imageName' => 'ImageName',
        'lang' => 'Lang',
        'necessity' => 'Necessity',
        'path' => 'Path',
        'raspDefend' => 'RaspDefend',
        'searchTags' => 'SearchTags',
        'type' => 'Type',
        'uuids' => 'Uuids',
        'vpcInstanceIds' => 'VpcInstanceIds',
        'vulEntityList' => 'VulEntityList',
    ];

    public function validate()
    {
        if (\is_array($this->vulEntityList)) {
            Model::validateArray($this->vulEntityList);
        }
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

        if (null !== $this->raspDefend) {
            $res['RaspDefend'] = $this->raspDefend;
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

        if (null !== $this->vulEntityList) {
            if (\is_array($this->vulEntityList)) {
                $res['VulEntityList'] = [];
                $n1 = 0;
                foreach ($this->vulEntityList as $item1) {
                    $res['VulEntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['RaspDefend'])) {
            $model->raspDefend = $map['RaspDefend'];
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

        if (isset($map['VulEntityList'])) {
            if (!empty($map['VulEntityList'])) {
                $model->vulEntityList = [];
                $n1 = 0;
                foreach ($map['VulEntityList'] as $item1) {
                    $model->vulEntityList[$n1] = vulEntityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
