<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\aiRoughData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\aiRoughData\standardSmartTagJob\results;

class standardSmartTagJob extends Model
{
    /**
     * @var string
     */
    public $aiJobId;
    /**
     * @var string
     */
    public $resultUrl;
    /**
     * @var results[]
     */
    public $results;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aiJobId'   => 'AiJobId',
        'resultUrl' => 'ResultUrl',
        'results'   => 'Results',
        'status'    => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiJobId) {
            $res['AiJobId'] = $this->aiJobId;
        }

        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['Results'] = [];
                $n1             = 0;
                foreach ($this->results as $item1) {
                    $res['Results'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AiJobId'])) {
            $model->aiJobId = $map['AiJobId'];
        }

        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }

        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n1             = 0;
                foreach ($map['Results'] as $item1) {
                    $model->results[$n1++] = results::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
