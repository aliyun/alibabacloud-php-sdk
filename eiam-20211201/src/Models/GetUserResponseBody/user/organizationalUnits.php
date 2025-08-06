<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponseBody\user;

use AlibabaCloud\Dara\Model;

class organizationalUnits extends Model
{
    /**
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @var bool
     */
    public $primary;
    protected $_name = [
        'organizationalUnitId' => 'OrganizationalUnitId',
        'organizationalUnitName' => 'OrganizationalUnitName',
        'primary' => 'Primary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }

        if (null !== $this->organizationalUnitName) {
            $res['OrganizationalUnitName'] = $this->organizationalUnitName;
        }

        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
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
        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }

        if (isset($map['OrganizationalUnitName'])) {
            $model->organizationalUnitName = $map['OrganizationalUnitName'];
        }

        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        return $model;
    }
}
