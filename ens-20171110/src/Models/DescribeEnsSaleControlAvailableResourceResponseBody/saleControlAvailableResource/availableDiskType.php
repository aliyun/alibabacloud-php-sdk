<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource;

use AlibabaCloud\Dara\Model;

class availableDiskType extends Model
{
    /**
     * @var string
     */
    public $diskName;

    /**
     * @var string
     */
    public $diskType;
    protected $_name = [
        'diskName' => 'DiskName',
        'diskType' => 'DiskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
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
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        return $model;
    }
}
