<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetAuthTokenRequest extends Model
{
    /**
     * @description The requested domain name.
     *
     * This parameter is required.
     * @example https://www.aliyundoc.com
     *
     * @var string
     */
    public $origin;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @description The URL of the requested web page.
     *
     * This parameter is required.
     * @example https://www.aliyundoc.com/
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'origin'               => 'Origin',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sceneCode'            => 'SceneCode',
        'url'                  => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
