<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupFilesResponseBody;

use AlibabaCloud\Dara\Model;

class backupFiles extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $subtree;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name'    => 'Name',
        'size'    => 'Size',
        'subtree' => 'Subtree',
        'type'    => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->subtree) {
            $res['Subtree'] = $this->subtree;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Subtree'])) {
            $model->subtree = $map['Subtree'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
