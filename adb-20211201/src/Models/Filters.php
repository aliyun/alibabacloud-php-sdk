<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\Filters\executionTimeRange;
use AlibabaCloud\SDK\Adb\V20211201\Models\Filters\submitTimeRange;
use AlibabaCloud\SDK\Adb\V20211201\Models\Filters\termiatedTimeRange;
use AlibabaCloud\Tea\Model;

class Filters extends Model
{
    /**
     * @var string
     */
    public $appIdRegex;

    /**
     * @var string
     */
    public $appNameRegex;

    /**
     * @var string
     */
    public $appState;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var executionTimeRange
     */
    public $executionTimeRange;

    /**
     * @var submitTimeRange
     */
    public $submitTimeRange;

    /**
     * @var termiatedTimeRange
     */
    public $termiatedTimeRange;
    protected $_name = [
        'appIdRegex'         => 'AppIdRegex',
        'appNameRegex'       => 'AppNameRegex',
        'appState'           => 'AppState',
        'appType'            => 'AppType',
        'executionTimeRange' => 'ExecutionTimeRange',
        'submitTimeRange'    => 'SubmitTimeRange',
        'termiatedTimeRange' => 'TermiatedTimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIdRegex) {
            $res['AppIdRegex'] = $this->appIdRegex;
        }
        if (null !== $this->appNameRegex) {
            $res['AppNameRegex'] = $this->appNameRegex;
        }
        if (null !== $this->appState) {
            $res['AppState'] = $this->appState;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->executionTimeRange) {
            $res['ExecutionTimeRange'] = null !== $this->executionTimeRange ? $this->executionTimeRange->toMap() : null;
        }
        if (null !== $this->submitTimeRange) {
            $res['SubmitTimeRange'] = null !== $this->submitTimeRange ? $this->submitTimeRange->toMap() : null;
        }
        if (null !== $this->termiatedTimeRange) {
            $res['TermiatedTimeRange'] = null !== $this->termiatedTimeRange ? $this->termiatedTimeRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIdRegex'])) {
            $model->appIdRegex = $map['AppIdRegex'];
        }
        if (isset($map['AppNameRegex'])) {
            $model->appNameRegex = $map['AppNameRegex'];
        }
        if (isset($map['AppState'])) {
            $model->appState = $map['AppState'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['ExecutionTimeRange'])) {
            $model->executionTimeRange = executionTimeRange::fromMap($map['ExecutionTimeRange']);
        }
        if (isset($map['SubmitTimeRange'])) {
            $model->submitTimeRange = submitTimeRange::fromMap($map['SubmitTimeRange']);
        }
        if (isset($map['TermiatedTimeRange'])) {
            $model->termiatedTimeRange = termiatedTimeRange::fromMap($map['TermiatedTimeRange']);
        }

        return $model;
    }
}
