<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\data;

use AlibabaCloud\Dara\Model;

class migration extends Model
{
    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var mixed
     */
    public $previousDomain;
    protected $_name = [
        'migrationStatus' => 'MigrationStatus',
        'previousDomain' => 'PreviousDomain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->migrationStatus) {
            $res['MigrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->previousDomain) {
            $res['PreviousDomain'] = $this->previousDomain;
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
        if (isset($map['MigrationStatus'])) {
            $model->migrationStatus = $map['MigrationStatus'];
        }

        if (isset($map['PreviousDomain'])) {
            $model->previousDomain = $map['PreviousDomain'];
        }

        return $model;
    }
}
