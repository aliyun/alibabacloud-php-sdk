<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateSemanticJobResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $creator;

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
    public $projectId;

    /**
     * @var string[]
     */
    public $referenceFileIds;

    /**
     * @var string[]
     */
    public $referenceFileUris;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var mixed[]
     */
    public $source;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'creator' => 'Creator',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'referenceFileIds' => 'ReferenceFileIds',
        'referenceFileUris' => 'ReferenceFileUris',
        'resourceGroupId' => 'ResourceGroupId',
        'source' => 'Source',
        'type' => 'Type',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->referenceFileIds)) {
            Model::validateArray($this->referenceFileIds);
        }
        if (\is_array($this->referenceFileUris)) {
            Model::validateArray($this->referenceFileUris);
        }
        if (\is_array($this->source)) {
            Model::validateArray($this->source);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->referenceFileIds) {
            if (\is_array($this->referenceFileIds)) {
                $res['ReferenceFileIds'] = [];
                $n1 = 0;
                foreach ($this->referenceFileIds as $item1) {
                    $res['ReferenceFileIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->referenceFileUris) {
            if (\is_array($this->referenceFileUris)) {
                $res['ReferenceFileUris'] = [];
                $n1 = 0;
                foreach ($this->referenceFileUris as $item1) {
                    $res['ReferenceFileUris'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->source) {
            if (\is_array($this->source)) {
                $res['Source'] = [];
                foreach ($this->source as $key1 => $value1) {
                    $res['Source'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ReferenceFileIds'])) {
            if (!empty($map['ReferenceFileIds'])) {
                $model->referenceFileIds = [];
                $n1 = 0;
                foreach ($map['ReferenceFileIds'] as $item1) {
                    $model->referenceFileIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReferenceFileUris'])) {
            if (!empty($map['ReferenceFileUris'])) {
                $model->referenceFileUris = [];
                $n1 = 0;
                foreach ($map['ReferenceFileUris'] as $item1) {
                    $model->referenceFileUris[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Source'])) {
            if (!empty($map['Source'])) {
                $model->source = [];
                foreach ($map['Source'] as $key1 => $value1) {
                    $model->source[$key1] = $value1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
