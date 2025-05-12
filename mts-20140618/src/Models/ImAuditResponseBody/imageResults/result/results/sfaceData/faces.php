<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results\sfaceData;

use AlibabaCloud\Dara\Model;

class faces extends Model
{
    /**
     * @var string
     */
    public $idid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $re;
    protected $_name = [
        'idid' => 'idid',
        'name' => 'name',
        're' => 're',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idid) {
            $res['idid'] = $this->idid;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->re) {
            $res['re'] = $this->re;
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
        if (isset($map['idid'])) {
            $model->idid = $map['idid'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['re'])) {
            $model->re = $map['re'];
        }

        return $model;
    }
}
