<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\dns\hops;

class dns extends Model
{
    /**
     * @var string
     */
    public $dnsServer;

    /**
     * @var string
     */
    public $dnsType;

    /**
     * @var string
     */
    public $error;

    /**
     * @var int
     */
    public $fromNode;

    /**
     * @var hops[][]
     */
    public $hops;

    /**
     * @var string
     */
    public $latency;

    /**
     * @var string
     */
    public $result;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $toNode;
    protected $_name = [
        'dnsServer' => 'DnsServer',
        'dnsType' => 'DnsType',
        'error' => 'Error',
        'fromNode' => 'FromNode',
        'hops' => 'Hops',
        'latency' => 'Latency',
        'result' => 'Result',
        'success' => 'Success',
        'toNode' => 'ToNode',
    ];

    public function validate()
    {
        if (\is_array($this->hops)) {
            Model::validateArray($this->hops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsServer) {
            $res['DnsServer'] = $this->dnsServer;
        }

        if (null !== $this->dnsType) {
            $res['DnsType'] = $this->dnsType;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->fromNode) {
            $res['FromNode'] = $this->fromNode;
        }

        if (null !== $this->hops) {
            if (\is_array($this->hops)) {
                $res['Hops'] = [];
                $n1 = 0;
                foreach ($this->hops as $item1) {
                    if (\is_array($item1)) {
                        $res['Hops'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Hops'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->latency) {
            $res['Latency'] = $this->latency;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->toNode) {
            $res['ToNode'] = $this->toNode;
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
        if (isset($map['DnsServer'])) {
            $model->dnsServer = $map['DnsServer'];
        }

        if (isset($map['DnsType'])) {
            $model->dnsType = $map['DnsType'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['FromNode'])) {
            $model->fromNode = $map['FromNode'];
        }

        if (isset($map['Hops'])) {
            if (!empty($map['Hops'])) {
                $model->hops = [];
                $n1 = 0;
                foreach ($map['Hops'] as $item1) {
                    if (!empty($item1)) {
                        $model->hops[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->hops[$n1][$n2] = hops::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Latency'])) {
            $model->latency = $map['Latency'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['ToNode'])) {
            $model->toNode = $map['ToNode'];
        }

        return $model;
    }
}
