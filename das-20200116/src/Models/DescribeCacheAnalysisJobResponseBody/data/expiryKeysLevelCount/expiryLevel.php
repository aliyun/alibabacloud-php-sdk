<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\expiryKeysLevelCount;

use AlibabaCloud\Tea\Model;

class expiryLevel extends Model
{
    /**
     * @description The time when the cache analysis task was complete. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1717469347000
     *
     * @var int
     */
    public $analysisTs;

    /**
     * @description The expiration level. Valid values:
     *
     *   **0**: The key never expires.
     *   **1**: The key has expired.
     *   **2**: The key has expired for 0 to 1 hour.
     *   **3**: The key has expired for 1 to 3 hours.
     *   **4**: The key has expired for 3 to 12 hours.
     *   **5**: The key has expired for 12 to 24 hours.
     *   **6**: The key has expired for one to two days.
     *   **7**: The key has expired for three to seven days.
     *   **8**: The key has expired for more than seven days.
     *
     * @example 0
     *
     * @var int
     */
    public $level;

    /**
     * @description The number of bytes occupied by the keys that have expired.
     *
     * @example 8064
     *
     * @var int
     */
    public $totalBytes;

    /**
     * @description The total number of the keys that have expired.
     *
     * @example 62
     *
     * @var int
     */
    public $totalKeys;
    protected $_name = [
        'analysisTs' => 'AnalysisTs',
        'level'      => 'Level',
        'totalBytes' => 'TotalBytes',
        'totalKeys'  => 'TotalKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisTs) {
            $res['AnalysisTs'] = $this->analysisTs;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }
        if (null !== $this->totalKeys) {
            $res['TotalKeys'] = $this->totalKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expiryLevel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisTs'])) {
            $model->analysisTs = $map['AnalysisTs'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }
        if (isset($map['TotalKeys'])) {
            $model->totalKeys = $map['TotalKeys'];
        }

        return $model;
    }
}
