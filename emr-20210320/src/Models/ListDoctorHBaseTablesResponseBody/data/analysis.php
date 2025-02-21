<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data;

use AlibabaCloud\Dara\Model;

class analysis extends Model
{
    /**
     * @var string[]
     */
    public $readRequestHotspotRegionList;
    /**
     * @var string
     */
    public $readRequestUnbalanceSuggestion;
    /**
     * @var string[]
     */
    public $requestHotspotRegionList;
    /**
     * @var string
     */
    public $requestUnbalanceSuggestion;
    /**
     * @var int
     */
    public $tableScore;
    /**
     * @var string[]
     */
    public $writeRequestHotspotRegionList;
    /**
     * @var string
     */
    public $writeRequestUnbalanceSuggestion;
    protected $_name = [
        'readRequestHotspotRegionList'    => 'ReadRequestHotspotRegionList',
        'readRequestUnbalanceSuggestion'  => 'ReadRequestUnbalanceSuggestion',
        'requestHotspotRegionList'        => 'RequestHotspotRegionList',
        'requestUnbalanceSuggestion'      => 'RequestUnbalanceSuggestion',
        'tableScore'                      => 'TableScore',
        'writeRequestHotspotRegionList'   => 'WriteRequestHotspotRegionList',
        'writeRequestUnbalanceSuggestion' => 'WriteRequestUnbalanceSuggestion',
    ];

    public function validate()
    {
        if (\is_array($this->readRequestHotspotRegionList)) {
            Model::validateArray($this->readRequestHotspotRegionList);
        }
        if (\is_array($this->requestHotspotRegionList)) {
            Model::validateArray($this->requestHotspotRegionList);
        }
        if (\is_array($this->writeRequestHotspotRegionList)) {
            Model::validateArray($this->writeRequestHotspotRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->readRequestHotspotRegionList) {
            if (\is_array($this->readRequestHotspotRegionList)) {
                $res['ReadRequestHotspotRegionList'] = [];
                $n1                                  = 0;
                foreach ($this->readRequestHotspotRegionList as $item1) {
                    $res['ReadRequestHotspotRegionList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->readRequestUnbalanceSuggestion) {
            $res['ReadRequestUnbalanceSuggestion'] = $this->readRequestUnbalanceSuggestion;
        }

        if (null !== $this->requestHotspotRegionList) {
            if (\is_array($this->requestHotspotRegionList)) {
                $res['RequestHotspotRegionList'] = [];
                $n1                              = 0;
                foreach ($this->requestHotspotRegionList as $item1) {
                    $res['RequestHotspotRegionList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestUnbalanceSuggestion) {
            $res['RequestUnbalanceSuggestion'] = $this->requestUnbalanceSuggestion;
        }

        if (null !== $this->tableScore) {
            $res['TableScore'] = $this->tableScore;
        }

        if (null !== $this->writeRequestHotspotRegionList) {
            if (\is_array($this->writeRequestHotspotRegionList)) {
                $res['WriteRequestHotspotRegionList'] = [];
                $n1                                   = 0;
                foreach ($this->writeRequestHotspotRegionList as $item1) {
                    $res['WriteRequestHotspotRegionList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->writeRequestUnbalanceSuggestion) {
            $res['WriteRequestUnbalanceSuggestion'] = $this->writeRequestUnbalanceSuggestion;
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
        if (isset($map['ReadRequestHotspotRegionList'])) {
            if (!empty($map['ReadRequestHotspotRegionList'])) {
                $model->readRequestHotspotRegionList = [];
                $n1                                  = 0;
                foreach ($map['ReadRequestHotspotRegionList'] as $item1) {
                    $model->readRequestHotspotRegionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ReadRequestUnbalanceSuggestion'])) {
            $model->readRequestUnbalanceSuggestion = $map['ReadRequestUnbalanceSuggestion'];
        }

        if (isset($map['RequestHotspotRegionList'])) {
            if (!empty($map['RequestHotspotRegionList'])) {
                $model->requestHotspotRegionList = [];
                $n1                              = 0;
                foreach ($map['RequestHotspotRegionList'] as $item1) {
                    $model->requestHotspotRegionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestUnbalanceSuggestion'])) {
            $model->requestUnbalanceSuggestion = $map['RequestUnbalanceSuggestion'];
        }

        if (isset($map['TableScore'])) {
            $model->tableScore = $map['TableScore'];
        }

        if (isset($map['WriteRequestHotspotRegionList'])) {
            if (!empty($map['WriteRequestHotspotRegionList'])) {
                $model->writeRequestHotspotRegionList = [];
                $n1                                   = 0;
                foreach ($map['WriteRequestHotspotRegionList'] as $item1) {
                    $model->writeRequestHotspotRegionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['WriteRequestUnbalanceSuggestion'])) {
            $model->writeRequestUnbalanceSuggestion = $map['WriteRequestUnbalanceSuggestion'];
        }

        return $model;
    }
}
