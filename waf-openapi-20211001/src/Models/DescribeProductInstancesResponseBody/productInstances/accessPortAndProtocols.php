<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances;

use AlibabaCloud\Dara\Model;

class accessPortAndProtocols extends Model
{
    /**
     * @var string[]
     */
    public $certificateIds;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'certificateIds' => 'CertificateIds',
        'port' => 'Port',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        if (\is_array($this->certificateIds)) {
            Model::validateArray($this->certificateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateIds) {
            if (\is_array($this->certificateIds)) {
                $res['CertificateIds'] = [];
                $n1 = 0;
                foreach ($this->certificateIds as $item1) {
                    $res['CertificateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['CertificateIds'])) {
            if (!empty($map['CertificateIds'])) {
                $model->certificateIds = [];
                $n1 = 0;
                foreach ($map['CertificateIds'] as $item1) {
                    $model->certificateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
