<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssueShrinkRequest\timeRange;

class GetIssueShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;
    /**
     * @var string
     */
    public $bizModule;
    /**
     * @var string
     */
    public $digestHash;
    /**
     * @var string
     */
    public $filterShrink;
    /**
     * @var string
     */
    public $os;
    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'appKey'       => 'AppKey',
        'bizModule'    => 'BizModule',
        'digestHash'   => 'DigestHash',
        'filterShrink' => 'Filter',
        'os'           => 'Os',
        'timeRange'    => 'TimeRange',
    ];

    public function validate()
    {
        if (null !== $this->timeRange) {
            $this->timeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->bizModule) {
            $res['BizModule'] = $this->bizModule;
        }

        if (null !== $this->digestHash) {
            $res['DigestHash'] = $this->digestHash;
        }

        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->timeRange) {
            $res['TimeRange'] = null !== $this->timeRange ? $this->timeRange->toArray($noStream) : $this->timeRange;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['BizModule'])) {
            $model->bizModule = $map['BizModule'];
        }

        if (isset($map['DigestHash'])) {
            $model->digestHash = $map['DigestHash'];
        }

        if (isset($map['Filter'])) {
            $model->filterShrink = $map['Filter'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['TimeRange'])) {
            $model->timeRange = timeRange::fromMap($map['TimeRange']);
        }

        return $model;
    }
}
