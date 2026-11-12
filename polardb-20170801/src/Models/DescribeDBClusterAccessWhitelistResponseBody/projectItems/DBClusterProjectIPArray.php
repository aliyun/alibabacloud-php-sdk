<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponseBody\projectItems;

use AlibabaCloud\Dara\Model;

class DBClusterProjectIPArray extends Model
{
    /**
     * @var bool
     */
    public $defaultOpen;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'defaultOpen' => 'DefaultOpen',
        'projectId' => 'ProjectId',
        'revision' => 'Revision',
        'securityIps' => 'SecurityIps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultOpen) {
            $res['DefaultOpen'] = $this->defaultOpen;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
        }

        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
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
        if (isset($map['DefaultOpen'])) {
            $model->defaultOpen = $map['DefaultOpen'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }

        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}
