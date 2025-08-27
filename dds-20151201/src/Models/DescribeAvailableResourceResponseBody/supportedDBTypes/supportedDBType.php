<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones;

class supportedDBType extends Model
{
    /**
     * @var availableZones
     */
    public $availableZones;

    /**
     * @var string
     */
    public $dbType;
    protected $_name = [
        'availableZones' => 'AvailableZones',
        'dbType' => 'DbType',
    ];

    public function validate()
    {
        if (null !== $this->availableZones) {
            $this->availableZones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = null !== $this->availableZones ? $this->availableZones->toArray($noStream) : $this->availableZones;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
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
        if (isset($map['AvailableZones'])) {
            $model->availableZones = availableZones::fromMap($map['AvailableZones']);
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        return $model;
    }
}
