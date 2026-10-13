<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class UpdateSkillResponseBody extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $bundleHash;

    /**
     * @var mixed[]
     */
    public $content;

    /**
     * @var string[]
     */
    public $dbtypes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $skillType;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'action' => 'Action',
        'bundleHash' => 'BundleHash',
        'content' => 'Content',
        'dbtypes' => 'Dbtypes',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'skillId' => 'SkillId',
        'skillType' => 'SkillType',
        'updatedAt' => 'UpdatedAt',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->dbtypes)) {
            Model::validateArray($this->dbtypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->bundleHash) {
            $res['BundleHash'] = $this->bundleHash;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                foreach ($this->content as $key1 => $value1) {
                    $res['Content'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dbtypes) {
            if (\is_array($this->dbtypes)) {
                $res['Dbtypes'] = [];
                $n1 = 0;
                foreach ($this->dbtypes as $item1) {
                    $res['Dbtypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillType) {
            $res['SkillType'] = $this->skillType;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['BundleHash'])) {
            $model->bundleHash = $map['BundleHash'];
        }

        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                foreach ($map['Content'] as $key1 => $value1) {
                    $model->content[$key1] = $value1;
                }
            }
        }

        if (isset($map['Dbtypes'])) {
            if (!empty($map['Dbtypes'])) {
                $model->dbtypes = [];
                $n1 = 0;
                foreach ($map['Dbtypes'] as $item1) {
                    $model->dbtypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillType'])) {
            $model->skillType = $map['SkillType'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
