<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteHoneypotProbeBindRequest extends Model
{
    /**
     * @var string
     */
    public $bindId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $probeId;
    protected $_name = [
        'bindId'  => 'BindId',
        'lang'    => 'Lang',
        'probeId' => 'ProbeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindId) {
            $res['BindId'] = $this->bindId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
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
        if (isset($map['BindId'])) {
            $model->bindId = $map['BindId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }

        return $model;
    }
}
