<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class ReportTestSampleRequest extends Model
{
    /**
     * @var string
     */
    public $testSample;
    protected $_name = [
        'testSample' => 'TestSample',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->testSample) {
            $res['TestSample'] = $this->testSample;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportTestSampleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TestSample'])) {
            $model->testSample = $map['TestSample'];
        }

        return $model;
    }
}
