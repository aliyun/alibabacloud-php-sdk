<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginPoolResponseBody\references;

use AlibabaCloud\Tea\Model;

class IPARecords extends Model
{
    /**
     * @description 记录ID。
     *
     * @example 104285288635****
     *
     * @var int
     */
    public $id;

    /**
     * @description Record name.
     *
     * @example ipa.example.com
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IPARecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
