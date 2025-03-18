<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class CreateOrganizationalUnitRequest extends Model
{
    /**
     * @description The description of the organizational unit.
     *
     * @example test organizational unit
     *
     * @var string
     */
    public $description;

    /**
     * @description The external ID of the organizational unit. The external ID can be used to map external data to the data of the organizational unit in Employee Identity and Access Management (EIAM) of Identity as a Service (IDaaS). By default, the external ID is the organizational unit ID.
     *
     * For organizational units with the same source type and source ID, each organizational unit has a unique external ID.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $organizationalUnitExternalId;

    /**
     * @description The name of the organizational unit.
     *
     * This parameter is required.
     *
     * @example name001
     *
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @description The ID of the parent organizational unit.
     *
     * This parameter is required.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $parentId;
    protected $_name = [
        'description' => 'description',
        'organizationalUnitExternalId' => 'organizationalUnitExternalId',
        'organizationalUnitName' => 'organizationalUnitName',
        'parentId' => 'parentId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateOrganizationalUnitRequest
     */
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
