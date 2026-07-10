<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeLangfuseUserResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeLangfuseUserResponseBody\data\memberships\projects;

class memberships extends Model
{
    /**
     * @var string
     */
    public $orgRole;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $organizationName;

    /**
     * @var projects[]
     */
    public $projects;
    protected $_name = [
        'orgRole' => 'OrgRole',
        'organizationId' => 'OrganizationId',
        'organizationName' => 'OrganizationName',
        'projects' => 'Projects',
    ];

    public function validate()
    {
        if (\is_array($this->projects)) {
            Model::validateArray($this->projects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orgRole) {
            $res['OrgRole'] = $this->orgRole;
        }

        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }

        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['Projects'] = [];
                $n1 = 0;
                foreach ($this->projects as $item1) {
                    $res['Projects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['OrgRole'])) {
            $model->orgRole = $map['OrgRole'];
        }

        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }

        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n1 = 0;
                foreach ($map['Projects'] as $item1) {
                    $model->projects[$n1] = projects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
