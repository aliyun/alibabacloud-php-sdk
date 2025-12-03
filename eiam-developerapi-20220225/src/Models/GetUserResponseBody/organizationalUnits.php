<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserResponseBody;

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
        'organizationalUnitId' => 'organizationalUnitId',
        'organizationalUnitName' => 'organizationalUnitName',
        'primary' => 'primary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationalUnitId) {
            $res['organizationalUnitId'] = $this->organizationalUnitId;
        }

        if (null !== $this->organizationalUnitName) {
            $res['organizationalUnitName'] = $this->organizationalUnitName;
        }

        if (null !== $this->primary) {
            $res['primary'] = $this->primary;
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
        if (isset($map['organizationalUnitId'])) {
            $model->organizationalUnitId = $map['organizationalUnitId'];
        }

        if (isset($map['organizationalUnitName'])) {
            $model->organizationalUnitName = $map['organizationalUnitName'];
        }

        if (isset($map['primary'])) {
            $model->primary = $map['primary'];
        }

        return $model;
    }
}
