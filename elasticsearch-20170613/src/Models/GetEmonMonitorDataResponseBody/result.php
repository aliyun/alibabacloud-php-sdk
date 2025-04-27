<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetEmonMonitorDataResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var mixed[]
     */
    public $dps;

    /**
     * @var float
     */
    public $integrity;

    /**
     * @var int
     */
    public $messageWatermark;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var float
     */
    public $summary;

    /**
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'dps' => 'dps',
        'integrity' => 'integrity',
        'messageWatermark' => 'messageWatermark',
        'metric' => 'metric',
        'summary' => 'summary',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->dps)) {
            Model::validateArray($this->dps);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dps) {
            if (\is_array($this->dps)) {
                $res['dps'] = [];
                foreach ($this->dps as $key1 => $value1) {
                    $res['dps'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->integrity) {
            $res['integrity'] = $this->integrity;
        }

        if (null !== $this->messageWatermark) {
            $res['messageWatermark'] = $this->messageWatermark;
        }

        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['tags'][$key1] = $value1;
                }
            }
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
        if (isset($map['dps'])) {
            if (!empty($map['dps'])) {
                $model->dps = [];
                foreach ($map['dps'] as $key1 => $value1) {
                    $model->dps[$key1] = $value1;
                }
            }
        }

        if (isset($map['integrity'])) {
            $model->integrity = $map['integrity'];
        }

        if (isset($map['messageWatermark'])) {
            $model->messageWatermark = $map['messageWatermark'];
        }

        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
