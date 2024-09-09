<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePostgresExtensionsResponseBody;

use AlibabaCloud\Tea\Model;

class installedExtensions extends Model
{
    /**
     * @description The category of the extension.
     *
     *   **external_access**
     *   **index_support**
     *   **information_stat**
     *   **geography_space**
     *   **vector_engine**
     *   **timing_engine**
     *   **data_type**
     *   **encrypt_secure**
     *   **text_process**
     *   **operation_maintenance**
     *   **self_develop**
     *
     * @example information_stat
     *
     * @var string
     */
    public $category;

    /**
     * @description The purpose of the extension.
     *
     * @example PostgreSQL load profile repository and report builder
     *
     * @var string
     */
    public $comment;

    /**
     * @description The default version of the extension.
     *
     * @example 4.1
     *
     * @var string
     */
    public $defaultVersion;

    /**
     * @description The current version of the extension.
     *
     * @example 4.1
     *
     * @var string
     */
    public $installedVersion;

    /**
     * @description The name of the extension.
     *
     * @example pg_profile
     *
     * @var string
     */
    public $name;

    /**
     * @description The user of the extension.
     *
     * @example test_user
     *
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the extension.
     *
     *   **0**: The extension is displayed by default.
     *   **1**: The extension is preferentially displayed.
     *
     * @example 0
     *
     * @var string
     */
    public $priority;

    /**
     * @description The extensions on which the current extension depends when it is installed.
     *
     * @example {dblink,plpgsql}
     *
     * @var string
     */
    public $requires;

    /**
     * @description Alibaba Cloud account ID.
     *
     * > Only exclusive plug-ins (plug-ins written by users) will return this parameter. Each Alibaba Cloud account only displays its own exclusive plug-ins.
     * @example 181578148294****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'category'         => 'Category',
        'comment'          => 'Comment',
        'defaultVersion'   => 'DefaultVersion',
        'installedVersion' => 'InstalledVersion',
        'name'             => 'Name',
        'owner'            => 'Owner',
        'priority'         => 'Priority',
        'requires'         => 'Requires',
        'uid'              => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return installedExtensions
     */
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
