<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListVisibleKnowledgeBasesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $sourceFailedCount;

    /**
     * @var int
     */
    public $sourceReadyCount;

    /**
     * @var int
     */
    public $sourceTotalCount;
    protected $_name = [
        'creatorName' => 'creatorName',
        'description' => 'description',
        'directoryId' => 'directoryId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'name' => 'name',
        'path' => 'path',
        'sourceFailedCount' => 'sourceFailedCount',
        'sourceReadyCount' => 'sourceReadyCount',
        'sourceTotalCount' => 'sourceTotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->sourceFailedCount) {
            $res['sourceFailedCount'] = $this->sourceFailedCount;
        }

        if (null !== $this->sourceReadyCount) {
            $res['sourceReadyCount'] = $this->sourceReadyCount;
        }

        if (null !== $this->sourceTotalCount) {
            $res['sourceTotalCount'] = $this->sourceTotalCount;
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
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['sourceFailedCount'])) {
            $model->sourceFailedCount = $map['sourceFailedCount'];
        }

        if (isset($map['sourceReadyCount'])) {
            $model->sourceReadyCount = $map['sourceReadyCount'];
        }

        if (isset($map['sourceTotalCount'])) {
            $model->sourceTotalCount = $map['sourceTotalCount'];
        }

        return $model;
    }
}
