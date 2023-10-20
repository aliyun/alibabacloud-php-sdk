<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registryFromHistory) {
            $res['RegistryFromHistory'] = $this->registryFromHistory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistryFromHistory'])) {
            $model->registryFromHistory = $map['RegistryFromHistory'];
        }

        return $model;
    }
}
