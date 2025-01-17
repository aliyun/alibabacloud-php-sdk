<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyAssetCleanConfigRequest;

use AlibabaCloud\Dara\Model;

class assetCleanConfigs extends Model
{
    /**
     * @var int
     */
    public $cleanDays;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'cleanDays' => 'CleanDays',
        'status'    => 'Status',
        'type'      => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cleanDays) {
            $res['CleanDays'] = $this->cleanDays;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CleanDays'])) {
            $model->cleanDays = $map['CleanDays'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
