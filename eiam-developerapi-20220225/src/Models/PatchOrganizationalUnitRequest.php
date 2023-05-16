<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class PatchOrganizationalUnitRequest extends Model
{
    /**
     * @example 机构描述
     *
     * @var string
     */
    public $description;

    /**
     * @example name001
     *
     * @var string
     */
    public $organizationalUnitName;
    protected $_name = [
        'description'            => 'description',
        'organizationalUnitName' => 'organizationalUnitName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->organizationalUnitName) {
            $res['organizationalUnitName'] = $this->organizationalUnitName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PatchOrganizationalUnitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['organizationalUnitName'])) {
            $model->organizationalUnitName = $map['organizationalUnitName'];
        }

        return $model;
    }
}
