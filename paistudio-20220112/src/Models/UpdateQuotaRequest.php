<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UpdateQuotaRequest extends Model
{
    /**
     * @example this is a test quota
     *
     * @var string
     */
    public $description;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var string
     */
    public $queueStrategy;

    /**
     * @var QuotaConfig
     */
    public $quotaConfig;

    /**
     * @var string
     */
    public $quotaName;
    protected $_name = [
        'description' => 'Description',
        'labels' => 'Labels',
        'queueStrategy' => 'QueueStrategy',
        'quotaConfig' => 'QuotaConfig',
        'quotaName' => 'QuotaName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queueStrategy) {
            $res['QueueStrategy'] = $this->queueStrategy;
        }
        if (null !== $this->quotaConfig) {
            $res['QuotaConfig'] = null !== $this->quotaConfig ? $this->quotaConfig->toMap() : null;
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QueueStrategy'])) {
            $model->queueStrategy = $map['QueueStrategy'];
        }
        if (isset($map['QuotaConfig'])) {
            $model->quotaConfig = QuotaConfig::fromMap($map['QuotaConfig']);
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        return $model;
    }
}
