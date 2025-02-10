<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups;

use AlibabaCloud\Dara\Model;

class extraInfo extends Model
{
    /**
     * @var string
     */
    public $registryFromHistory;
    protected $_name = [
        'registryFromHistory' => 'RegistryFromHistory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registryFromHistory) {
            $res['RegistryFromHistory'] = $this->registryFromHistory;
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
        if (isset($map['RegistryFromHistory'])) {
            $model->registryFromHistory = $map['RegistryFromHistory'];
        }

        return $model;
    }
}
