<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\expiryKeysLevelCount;

use AlibabaCloud\Dara\Model;

class expiryLevel extends Model
{
    /**
     * @var int
     */
    public $analysisTs;
    /**
     * @var int
     */
    public $level;
    /**
     * @var int
     */
    public $totalBytes;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
