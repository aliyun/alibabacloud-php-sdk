<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetProjectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetProjectResponseBody\projectInfo\whiteLists;

class projectInfo extends Model
{
    /**
     * @var string
     */
    public $bizUnitDisplayName;

    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var int
     */
    public $computeSourceId;

    /**
     * @var string
     */
    public $computeSourceName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $env;

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
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameSpaceTag;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var int
     */
    public $streamComputeSourceId;

    /**
     * @var string
     */
    public $streamComputeSourceName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var whiteLists[]
     */
    public $whiteLists;
    protected $_name = [
        'bizUnitDisplayName' => 'BizUnitDisplayName',
        'bizUnitId' => 'BizUnitId',
        'computeSourceId' => 'ComputeSourceId',
        'computeSourceName' => 'ComputeSourceName',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'env' => 'Env',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'mode' => 'Mode',
        'name' => 'Name',
        'nameSpaceTag' => 'NameSpaceTag',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'streamComputeSourceId' => 'StreamComputeSourceId',
        'streamComputeSourceName' => 'StreamComputeSourceName',
        'type' => 'Type',
        'whiteLists' => 'WhiteLists',
    ];

    public function validate()
    {
        if (\is_array($this->whiteLists)) {
            Model::validateArray($this->whiteLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitDisplayName) {
            $res['BizUnitDisplayName'] = $this->bizUnitDisplayName;
        }

        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->computeSourceId) {
            $res['ComputeSourceId'] = $this->computeSourceId;
        }

        if (null !== $this->computeSourceName) {
            $res['ComputeSourceName'] = $this->computeSourceName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
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

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameSpaceTag) {
            $res['NameSpaceTag'] = $this->nameSpaceTag;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->streamComputeSourceId) {
            $res['StreamComputeSourceId'] = $this->streamComputeSourceId;
        }

        if (null !== $this->streamComputeSourceName) {
            $res['StreamComputeSourceName'] = $this->streamComputeSourceName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->whiteLists) {
            if (\is_array($this->whiteLists)) {
                $res['WhiteLists'] = [];
                $n1 = 0;
                foreach ($this->whiteLists as $item1) {
                    $res['WhiteLists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BizUnitDisplayName'])) {
            $model->bizUnitDisplayName = $map['BizUnitDisplayName'];
        }

        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['ComputeSourceId'])) {
            $model->computeSourceId = $map['ComputeSourceId'];
        }

        if (isset($map['ComputeSourceName'])) {
            $model->computeSourceName = $map['ComputeSourceName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
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

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameSpaceTag'])) {
            $model->nameSpaceTag = $map['NameSpaceTag'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['StreamComputeSourceId'])) {
            $model->streamComputeSourceId = $map['StreamComputeSourceId'];
        }

        if (isset($map['StreamComputeSourceName'])) {
            $model->streamComputeSourceName = $map['StreamComputeSourceName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WhiteLists'])) {
            if (!empty($map['WhiteLists'])) {
                $model->whiteLists = [];
                $n1 = 0;
                foreach ($map['WhiteLists'] as $item1) {
                    $model->whiteLists[$n1] = whiteLists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
