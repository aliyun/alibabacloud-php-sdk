<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListHoneypotProbeUuidRequest extends Model
{
    /**
     * @var string
     */
    public $controlNodeId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $probeType;
    protected $_name = [
        'controlNodeId' => 'ControlNodeId',
        'lang' => 'Lang',
        'probeType' => 'ProbeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlNodeId) {
            $res['ControlNodeId'] = $this->controlNodeId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
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
        if (isset($map['ControlNodeId'])) {
            $model->controlNodeId = $map['ControlNodeId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }

        return $model;
    }
}
