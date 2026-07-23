<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateSiteInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $newInstanceId;

    /**
     * @var int
     */
    public $resourceOwner;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'newInstanceId' => 'NewInstanceId',
        'resourceOwner' => 'ResourceOwner',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newInstanceId) {
            $res['NewInstanceId'] = $this->newInstanceId;
        }

        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['NewInstanceId'])) {
            $model->newInstanceId = $map['NewInstanceId'];
        }

        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
