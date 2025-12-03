<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class GetOrganizationalUnitIdByExternalIdRequest extends Model
{
    /**
     * @var string
     */
    public $organizationalUnitExternalId;

    /**
     * @var string
     */
    public $organizationalUnitSourceId;

    /**
     * @var string
     */
    public $organizationalUnitSourceType;
    protected $_name = [
        'organizationalUnitExternalId' => 'organizationalUnitExternalId',
        'organizationalUnitSourceId' => 'organizationalUnitSourceId',
        'organizationalUnitSourceType' => 'organizationalUnitSourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationalUnitExternalId) {
            $res['organizationalUnitExternalId'] = $this->organizationalUnitExternalId;
        }

        if (null !== $this->organizationalUnitSourceId) {
            $res['organizationalUnitSourceId'] = $this->organizationalUnitSourceId;
        }

        if (null !== $this->organizationalUnitSourceType) {
            $res['organizationalUnitSourceType'] = $this->organizationalUnitSourceType;
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
        if (isset($map['organizationalUnitExternalId'])) {
            $model->organizationalUnitExternalId = $map['organizationalUnitExternalId'];
        }

        if (isset($map['organizationalUnitSourceId'])) {
            $model->organizationalUnitSourceId = $map['organizationalUnitSourceId'];
        }

        if (isset($map['organizationalUnitSourceType'])) {
            $model->organizationalUnitSourceType = $map['organizationalUnitSourceType'];
        }

        return $model;
    }
}
