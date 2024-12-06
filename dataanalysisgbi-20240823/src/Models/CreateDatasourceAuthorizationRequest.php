<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasourceAuthorizationRequest extends Model
{
    /**
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example jdbc:mysql://rm-2zedvv990c8d8rj8ejo.mysql.rds.aliyuncs.com:3306/gbi_good_case
     *
     * @var string
     */
    public $url;

    /**
     * @example root
     *
     * @var string
     */
    public $userName;

    /**
     * @example vdb-E0F693C8-9F72-5830-B81A-696C9D8EBBD1
     *
     * @var string
     */
    public $vdbId;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateDatasourceAuthorizationRequest
     */
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
