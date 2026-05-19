<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDiagnoseReportResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDiagnoseReportResponseBody\content\report\l1Tengine;

class report extends Model
{
    /**
     * @var string
     */
    public $clientInfo;

    /**
     * @var string
     */
    public $diagnoseResult;

    /**
     * @var string
     */
    public $l1Node;

    /**
     * @var l1Tengine
     */
    public $l1Tengine;

    /**
     * @var string[]
     */
    public $sourceInfo;
    protected $_name = [
        'clientInfo' => 'ClientInfo',
        'diagnoseResult' => 'DiagnoseResult',
        'l1Node' => 'L1Node',
        'l1Tengine' => 'L1Tengine',
        'sourceInfo' => 'SourceInfo',
    ];

    public function validate()
    {
        if (null !== $this->l1Tengine) {
            $this->l1Tengine->validate();
        }
        if (\is_array($this->sourceInfo)) {
            Model::validateArray($this->sourceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = $this->clientInfo;
        }

        if (null !== $this->diagnoseResult) {
            $res['DiagnoseResult'] = $this->diagnoseResult;
        }

        if (null !== $this->l1Node) {
            $res['L1Node'] = $this->l1Node;
        }

        if (null !== $this->l1Tengine) {
            $res['L1Tengine'] = null !== $this->l1Tengine ? $this->l1Tengine->toArray($noStream) : $this->l1Tengine;
        }

        if (null !== $this->sourceInfo) {
            if (\is_array($this->sourceInfo)) {
                $res['SourceInfo'] = [];
                $n1 = 0;
                foreach ($this->sourceInfo as $item1) {
                    $res['SourceInfo'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ClientInfo'])) {
            $model->clientInfo = $map['ClientInfo'];
        }

        if (isset($map['DiagnoseResult'])) {
            $model->diagnoseResult = $map['DiagnoseResult'];
        }

        if (isset($map['L1Node'])) {
            $model->l1Node = $map['L1Node'];
        }

        if (isset($map['L1Tengine'])) {
            $model->l1Tengine = l1Tengine::fromMap($map['L1Tengine']);
        }

        if (isset($map['SourceInfo'])) {
            if (!empty($map['SourceInfo'])) {
                $model->sourceInfo = [];
                $n1 = 0;
                foreach ($map['SourceInfo'] as $item1) {
                    $model->sourceInfo[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
