<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;

class GenerateReportShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $reportConfigsShrink;
    protected $_name = [
        'reportConfigsShrink' => 'ReportConfigs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportConfigsShrink) {
            $res['ReportConfigs'] = $this->reportConfigsShrink;
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
        if (isset($map['ReportConfigs'])) {
            $model->reportConfigsShrink = $map['ReportConfigs'];
        }

        return $model;
    }
}
