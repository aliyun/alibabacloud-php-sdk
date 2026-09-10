<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListDataCheckReportInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $reportTime;
    protected $_name = [
        'batchId' => 'batchId',
        'label' => 'label',
        'reportTime' => 'reportTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->reportTime) {
            $res['reportTime'] = $this->reportTime;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['reportTime'])) {
            $model->reportTime = $map['reportTime'];
        }

        return $model;
    }
}
