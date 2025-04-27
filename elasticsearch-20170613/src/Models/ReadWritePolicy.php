<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ReadWritePolicy extends Model
{
    /**
     * @var bool
     */
    public $autoGeneratePk;

    /**
     * @var bool
     */
    public $writeHa;

    /**
     * @var string
     */
    public $writePolicy;
    protected $_name = [
        'autoGeneratePk' => 'autoGeneratePk',
        'writeHa' => 'writeHa',
        'writePolicy' => 'writePolicy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoGeneratePk) {
            $res['autoGeneratePk'] = $this->autoGeneratePk;
        }

        if (null !== $this->writeHa) {
            $res['writeHa'] = $this->writeHa;
        }

        if (null !== $this->writePolicy) {
            $res['writePolicy'] = $this->writePolicy;
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
        if (isset($map['autoGeneratePk'])) {
            $model->autoGeneratePk = $map['autoGeneratePk'];
        }

        if (isset($map['writeHa'])) {
            $model->writeHa = $map['writeHa'];
        }

        if (isset($map['writePolicy'])) {
            $model->writePolicy = $map['writePolicy'];
        }

        return $model;
    }
}
