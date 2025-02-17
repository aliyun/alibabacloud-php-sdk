<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class CreateDatasourceAuthorizationRequest extends Model
{
    /**
     * @var string
     */
    public $password;
    /**
     * @var int
     */
    public $type;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $userName;
    /**
     * @var string
     */
    public $vdbId;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'password'    => 'password',
        'type'        => 'type',
        'url'         => 'url',
        'userName'    => 'userName',
        'vdbId'       => 'vdbId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        if (null !== $this->vdbId) {
            $res['vdbId'] = $this->vdbId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        if (isset($map['vdbId'])) {
            $model->vdbId = $map['vdbId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
