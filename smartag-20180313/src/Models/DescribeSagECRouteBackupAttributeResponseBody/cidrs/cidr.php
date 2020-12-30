<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagECRouteBackupAttributeResponseBody\cidrs;

use AlibabaCloud\Tea\Model;

class cidr extends Model
{
    /**
     * @var bool
     */
    public $enableBackup;

    /**
     * @var string
     */
    public $cidr;
    protected $_name = [
        'enableBackup' => 'EnableBackup',
        'cidr'         => 'Cidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableBackup) {
            $res['EnableBackup'] = $this->enableBackup;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cidr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableBackup'])) {
            $model->enableBackup = $map['EnableBackup'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        return $model;
    }
}
