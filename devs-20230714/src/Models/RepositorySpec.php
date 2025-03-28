<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class RepositorySpec extends Model
{
    /**
     * @var string
     */
    public $cloneUrl;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $webUrl;
    protected $_name = [
        'cloneUrl' => 'cloneUrl',
        'connectionName' => 'connectionName',
        'displayName' => 'displayName',
        'id' => 'id',
        'owner' => 'owner',
        'platform' => 'platform',
        'webUrl' => 'webUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
