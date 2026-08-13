<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUserVisibleKnowledgeBasesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $creatorId;

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
     * @var string
     */
    public $directoryKind;

    /**
     * @var string
     */
    public $directoryType;

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
    protected $_name = [
        'creatorId' => 'creatorId',
        'creatorName' => 'creatorName',
        'description' => 'description',
        'directoryId' => 'directoryId',
        'directoryKind' => 'directoryKind',
        'directoryType' => 'directoryType',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryKind) {
            $res['directoryKind'] = $this->directoryKind;
        }

        if (null !== $this->directoryType) {
            $res['directoryType'] = $this->directoryType;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['directoryKind'])) {
            $model->directoryKind = $map['directoryKind'];
        }

        if (isset($map['directoryType'])) {
            $model->directoryType = $map['directoryType'];
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

        return $model;
    }
}
