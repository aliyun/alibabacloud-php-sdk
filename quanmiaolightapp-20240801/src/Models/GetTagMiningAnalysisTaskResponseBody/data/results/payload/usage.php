<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetTagMiningAnalysisTaskResponseBody\data\results\payload;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $inputToken;

    /**
     * @var int
     */
    public $outputToken;

    /**
     * @var int
     */
    public $totalToken;
    protected $_name = [
        'inputToken' => 'inputToken',
        'outputToken' => 'outputToken',
        'totalToken' => 'totalToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputToken) {
            $res['inputToken'] = $this->inputToken;
        }

        if (null !== $this->outputToken) {
            $res['outputToken'] = $this->outputToken;
        }

        if (null !== $this->totalToken) {
            $res['totalToken'] = $this->totalToken;
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
        if (isset($map['inputToken'])) {
            $model->inputToken = $map['inputToken'];
        }

        if (isset($map['outputToken'])) {
            $model->outputToken = $map['outputToken'];
        }

        if (isset($map['totalToken'])) {
            $model->totalToken = $map['totalToken'];
        }

        return $model;
    }
}
