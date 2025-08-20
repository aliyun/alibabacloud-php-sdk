<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetADBSparkNecessaryRAMPermissionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\GetADBSparkNecessaryRAMPermissionsResponseBody\data\deniedDetail;

class data extends Model
{
    /**
     * @var deniedDetail
     */
    public $deniedDetail;

    /**
     * @var bool
     */
    public $passed;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'deniedDetail' => 'DeniedDetail',
        'passed' => 'Passed',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (null !== $this->deniedDetail) {
            $this->deniedDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deniedDetail) {
            $res['DeniedDetail'] = null !== $this->deniedDetail ? $this->deniedDetail->toArray($noStream) : $this->deniedDetail;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['DeniedDetail'])) {
            $model->deniedDetail = deniedDetail::fromMap($map['DeniedDetail']);
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
