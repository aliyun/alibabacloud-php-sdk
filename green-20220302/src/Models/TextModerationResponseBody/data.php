<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationResponseBody\data\ext;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $descriptions;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var ext
     */
    public $ext;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $manualTaskId;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'accountId' => 'accountId',
        'dataId' => 'dataId',
        'descriptions' => 'descriptions',
        'deviceId' => 'deviceId',
        'ext' => 'ext',
        'labels' => 'labels',
        'manualTaskId' => 'manualTaskId',
        'reason' => 'reason',
    ];

    public function validate()
    {
        if (null !== $this->ext) {
            $this->ext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->dataId) {
            $res['dataId'] = $this->dataId;
        }

        if (null !== $this->descriptions) {
            $res['descriptions'] = $this->descriptions;
        }

        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }

        if (null !== $this->ext) {
            $res['ext'] = null !== $this->ext ? $this->ext->toArray($noStream) : $this->ext;
        }

        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }

        if (null !== $this->manualTaskId) {
            $res['manualTaskId'] = $this->manualTaskId;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['dataId'])) {
            $model->dataId = $map['dataId'];
        }

        if (isset($map['descriptions'])) {
            $model->descriptions = $map['descriptions'];
        }

        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }

        if (isset($map['ext'])) {
            $model->ext = ext::fromMap($map['ext']);
        }

        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }

        if (isset($map['manualTaskId'])) {
            $model->manualTaskId = $map['manualTaskId'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}
