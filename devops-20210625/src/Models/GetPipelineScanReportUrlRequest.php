<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineScanReportUrlRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example /test/test/test.html
     *
     * @var string
     */
    public $reportPath;
    protected $_name = [
        'reportPath' => 'reportPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportPath) {
            $res['reportPath'] = $this->reportPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineScanReportUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reportPath'])) {
            $model->reportPath = $map['reportPath'];
        }

        return $model;
    }
}
