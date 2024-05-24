<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class RepositorySpec extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example https://github.com/DDofDD/start-springboot-lfgy.git
     *
     * @var string
     */
    public $cloneUrl;

    /**
     * @description This parameter is required.
     *
     * @example awesome-connection
     *
     * @var string
     */
    public $connectionName;

    /**
     * @example my-repo-name
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 312649
     *
     * @var int
     */
    public $id;

    /**
     * @example my-org-name
     *
     * @var string
     */
    public $owner;

    /**
     * @example github
     *
     * @var string
     */
    public $platform;

    /**
     * @example https://github.com/my-org-name/my-repo-name
     *
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'cloneUrl'       => 'cloneUrl',
        'connectionName' => 'connectionName',
        'displayName'    => 'displayName',
        'id'             => 'id',
        'owner'          => 'owner',
        'platform'       => 'platform',
        'webUrl'         => 'webUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloneUrl) {
            $res['cloneUrl'] = $this->cloneUrl;
        }
        if (null !== $this->connectionName) {
            $res['connectionName'] = $this->connectionName;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->webUrl) {
            $res['webUrl'] = $this->webUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RepositorySpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cloneUrl'])) {
            $model->cloneUrl = $map['cloneUrl'];
        }
        if (isset($map['connectionName'])) {
            $model->connectionName = $map['connectionName'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['webUrl'])) {
            $model->webUrl = $map['webUrl'];
        }

        return $model;
    }
}
