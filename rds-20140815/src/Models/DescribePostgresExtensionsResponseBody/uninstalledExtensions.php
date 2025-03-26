<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePostgresExtensionsResponseBody;

use AlibabaCloud\Dara\Model;

class uninstalledExtensions extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $installedVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $requires;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'category' => 'Category',
        'comment' => 'Comment',
        'defaultVersion' => 'DefaultVersion',
        'installedVersion' => 'InstalledVersion',
        'name' => 'Name',
        'owner' => 'Owner',
        'priority' => 'Priority',
        'requires' => 'Requires',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }

        if (null !== $this->installedVersion) {
            $res['InstalledVersion'] = $this->installedVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->requires) {
            $res['Requires'] = $this->requires;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }

        if (isset($map['InstalledVersion'])) {
            $model->installedVersion = $map['InstalledVersion'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Requires'])) {
            $model->requires = $map['Requires'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
