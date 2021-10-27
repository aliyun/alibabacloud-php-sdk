<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SqlCompatibilityStartRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var bool
     */
    public $performanceTest;

    /**
     * @var string
     */
    public $targetVersion;
    protected $_name = [
        'drdsInstanceId'  => 'DrdsInstanceId',
        'performanceTest' => 'PerformanceTest',
        'targetVersion'   => 'TargetVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->performanceTest) {
            $res['PerformanceTest'] = $this->performanceTest;
        }
        if (null !== $this->targetVersion) {
            $res['TargetVersion'] = $this->targetVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SqlCompatibilityStartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['PerformanceTest'])) {
            $model->performanceTest = $map['PerformanceTest'];
        }
        if (isset($map['TargetVersion'])) {
            $model->targetVersion = $map['TargetVersion'];
        }

        return $model;
    }
}
