<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsObjectsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $capacity;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var int
     */
    public $lastModified;

    /**
     * @var string
     */
    public $linkTarget;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $nlink;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'capacity' => 'Capacity',
        'creationTime' => 'CreationTime',
        'lastModified' => 'LastModified',
        'linkTarget' => 'LinkTarget',
        'mode' => 'Mode',
        'nlink' => 'Nlink',
        'owner' => 'Owner',
        'path' => 'Path',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }

        if (null !== $this->linkTarget) {
            $res['LinkTarget'] = $this->linkTarget;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->nlink) {
            $res['Nlink'] = $this->nlink;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }

        if (isset($map['LinkTarget'])) {
            $model->linkTarget = $map['LinkTarget'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Nlink'])) {
            $model->nlink = $map['Nlink'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
