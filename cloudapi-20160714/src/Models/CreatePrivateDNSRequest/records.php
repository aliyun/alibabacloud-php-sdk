<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreatePrivateDNSRequest;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The resolution record.
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $record;

    /**
     * @description The weight of the record.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'record' => 'Record',
        'weight' => 'Weight',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
