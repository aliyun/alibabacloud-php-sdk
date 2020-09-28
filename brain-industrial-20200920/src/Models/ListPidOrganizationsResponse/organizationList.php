<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidOrganizationsResponse;

use AlibabaCloud\Tea\Model;

class organizationList extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $organizationName;

    /**
     * @var int
     */
    public $organizationLevel;

    /**
     * @var string
     */
    public $parentOrganizationId;

    /**
     * @var string
     */
    public $levelName;
    protected $_name = [
        'organizationId'       => 'OrganizationId',
        'organizationName'     => 'OrganizationName',
        'organizationLevel'    => 'OrganizationLevel',
        'parentOrganizationId' => 'ParentOrganizationId',
        'levelName'            => 'LevelName',
    ];

    public function validate()
    {
        Model::validateRequired('organizationId', $this->organizationId, true);
        Model::validateRequired('organizationName', $this->organizationName, true);
        Model::validateRequired('organizationLevel', $this->organizationLevel, true);
        Model::validateRequired('parentOrganizationId', $this->parentOrganizationId, true);
        Model::validateRequired('levelName', $this->levelName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }
        if (null !== $this->organizationLevel) {
            $res['OrganizationLevel'] = $this->organizationLevel;
        }
        if (null !== $this->parentOrganizationId) {
            $res['ParentOrganizationId'] = $this->parentOrganizationId;
        }
        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organizationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }
        if (isset($map['OrganizationLevel'])) {
            $model->organizationLevel = $map['OrganizationLevel'];
        }
        if (isset($map['ParentOrganizationId'])) {
            $model->parentOrganizationId = $map['ParentOrganizationId'];
        }
        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }

        return $model;
    }
}
