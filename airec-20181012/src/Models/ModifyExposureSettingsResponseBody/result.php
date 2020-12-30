<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ModifyExposureSettingsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $durationSeconds;

    /**
     * @var bool
     */
    public $scenarioBased;
    protected $_name = [
        'durationSeconds' => 'DurationSeconds',
        'scenarioBased'   => 'ScenarioBased',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
        }
        if (null !== $this->scenarioBased) {
            $res['ScenarioBased'] = $this->scenarioBased;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
        }
        if (isset($map['ScenarioBased'])) {
            $model->scenarioBased = $map['ScenarioBased'];
        }

        return $model;
    }
}
