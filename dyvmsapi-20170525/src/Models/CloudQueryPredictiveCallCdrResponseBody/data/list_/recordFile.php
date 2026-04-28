<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryPredictiveCallCdrResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class recordFile extends Model
{
    /**
     * @var string
     */
    public $file;

    /**
     * @var int
     */
    public $monitorType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'file' => 'File',
        'monitorType' => 'Monitor_type',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->file) {
            $res['File'] = $this->file;
        }

        if (null !== $this->monitorType) {
            $res['Monitor_type'] = $this->monitorType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['File'])) {
            $model->file = $map['File'];
        }

        if (isset($map['Monitor_type'])) {
            $model->monitorType = $map['Monitor_type'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
