<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class subscriptionDataType extends Model
{
    /**
     * @description The private endpoint of the change tracking instance in the `<Address>:<Port number>` format.
     *
     * @example true
     *
     * @var bool
     */
    public $ddl;

    /**
     * @description The public endpoint of the change tracking instance in the `<Address>:<Port number>` format.
     *
     * @example true
     *
     * @var bool
     */
    public $dml;
    protected $_name = [
        'ddl' => 'Ddl',
        'dml' => 'Dml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddl) {
            $res['Ddl'] = $this->ddl;
        }
        if (null !== $this->dml) {
            $res['Dml'] = $this->dml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDataType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ddl'])) {
            $model->ddl = $map['Ddl'];
        }
        if (isset($map['Dml'])) {
            $model->dml = $map['Dml'];
        }

        return $model;
    }
}
