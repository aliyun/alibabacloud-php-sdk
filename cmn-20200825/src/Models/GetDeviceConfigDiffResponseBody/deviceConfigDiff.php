<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceConfigDiffResponseBody;

use AlibabaCloud\Tea\Model;

class deviceConfigDiff extends Model
{
    /**
     * @example --- 2021-01-01 / 2021-01-02 差异提取 +++ 2021-01-01 / 2021-01-02 差异提取 @@ -1,1 +1,1 @@ -hostname HZYT_USG6620_A +hostname HZYT_USG6620_B
     *
     * @var string
     */
    public $extractDiff;

    /**
     * @example --- 2021-01-01 / 2021-01-02 全量比对 +++ 2021-01-01 / 2021-01-02 全量比对 @@ -1,1 +1,1 @@ -hostname HZYT_USG6620_A +hostname HZYT_USG6620_B
     *
     * @var string
     */
    public $totalDiff;
    protected $_name = [
        'extractDiff' => 'ExtractDiff',
        'totalDiff'   => 'TotalDiff',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extractDiff) {
            $res['ExtractDiff'] = $this->extractDiff;
        }
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceConfigDiff
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtractDiff'])) {
            $model->extractDiff = $map['ExtractDiff'];
        }
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }

        return $model;
    }
}
