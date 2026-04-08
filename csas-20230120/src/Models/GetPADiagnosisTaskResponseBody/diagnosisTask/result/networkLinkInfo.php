<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\dns;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\links;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\nodes;

class networkLinkInfo extends Model
{
    /**
     * @var dns
     */
    public $dns;

    /**
     * @var string
     */
    public $FBT;

    /**
     * @var links[]
     */
    public $links;

    /**
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'dns' => 'Dns',
        'FBT' => 'FBT',
        'links' => 'Links',
        'nodes' => 'Nodes',
    ];

    public function validate()
    {
        if (null !== $this->dns) {
            $this->dns->validate();
        }
        if (\is_array($this->links)) {
            Model::validateArray($this->links);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dns) {
            $res['Dns'] = null !== $this->dns ? $this->dns->toArray($noStream) : $this->dns;
        }

        if (null !== $this->FBT) {
            $res['FBT'] = $this->FBT;
        }

        if (null !== $this->links) {
            if (\is_array($this->links)) {
                $res['Links'] = [];
                $n1 = 0;
                foreach ($this->links as $item1) {
                    $res['Links'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Dns'])) {
            $model->dns = dns::fromMap($map['Dns']);
        }

        if (isset($map['FBT'])) {
            $model->FBT = $map['FBT'];
        }

        if (isset($map['Links'])) {
            if (!empty($map['Links'])) {
                $model->links = [];
                $n1 = 0;
                foreach ($map['Links'] as $item1) {
                    $model->links[$n1] = links::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1] = nodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
