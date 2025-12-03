<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class CreateOrganizationalUnitRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $organizationalUnitExternalId;

    /**
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @var string
     */
    public $parentId;
    protected $_name = [
        'description' => 'description',
        'organizationalUnitExternalId' => 'organizationalUnitExternalId',
        'organizationalUnitName' => 'organizationalUnitName',
        'parentId' => 'parentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->organizationalUnitExternalId) {
            $res['organizationalUnitExternalId'] = $this->organizationalUnitExternalId;
        }

        if (null !== $this->organizationalUnitName) {
            $res['organizationalUnitName'] = $this->organizationalUnitName;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['organizationalUnitExternalId'])) {
            $model->organizationalUnitExternalId = $map['organizationalUnitExternalId'];
        }

        if (isset($map['organizationalUnitName'])) {
            $model->organizationalUnitName = $map['organizationalUnitName'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        return $model;
    }
}
