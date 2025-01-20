<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\CreateAccessPointResponseBody;

use AlibabaCloud\Dara\Model;

class accessPoint extends Model
{
    /**
     * @var string
     */
    public $accessPointDomain;
    /**
     * @var string
     */
    public $accessPointId;
    protected $_name = [
        'accessPointDomain' => 'AccessPointDomain',
        'accessPointId'     => 'AccessPointId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointDomain) {
            $res['AccessPointDomain'] = $this->accessPointDomain;
        }

        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
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
        if (isset($map['AccessPointDomain'])) {
            $model->accessPointDomain = $map['AccessPointDomain'];
        }

        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        return $model;
    }
}
