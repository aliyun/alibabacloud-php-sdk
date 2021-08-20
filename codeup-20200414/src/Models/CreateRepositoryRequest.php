<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class CreateRepositoryRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var bool
     */
    public $sync;

    /**
     * @var bool
     */
    public $createParentPath;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $subUserId;
    protected $_name = [
        'accessToken'      => 'AccessToken',
        'sync'             => 'Sync',
        'createParentPath' => 'CreateParentPath',
        'organizationId'   => 'OrganizationId',
        'subUserId'        => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->sync) {
            $res['Sync'] = $this->sync;
        }
        if (null !== $this->createParentPath) {
            $res['CreateParentPath'] = $this->createParentPath;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepositoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['Sync'])) {
            $model->sync = $map['Sync'];
        }
        if (isset($map['CreateParentPath'])) {
            $model->createParentPath = $map['CreateParentPath'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
