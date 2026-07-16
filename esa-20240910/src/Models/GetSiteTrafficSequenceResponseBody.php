<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteTrafficSequenceResponseBody\trafficSequences;

class GetSiteTrafficSequenceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficSequences[]
     */
    public $trafficSequences;
    protected $_name = [
        'requestId' => 'RequestId',
        'trafficSequences' => 'TrafficSequences',
    ];

    public function validate()
    {
        if (\is_array($this->trafficSequences)) {
            Model::validateArray($this->trafficSequences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficSequences) {
            if (\is_array($this->trafficSequences)) {
                $res['TrafficSequences'] = [];
                $n1 = 0;
                foreach ($this->trafficSequences as $item1) {
                    $res['TrafficSequences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TrafficSequences'])) {
            if (!empty($map['TrafficSequences'])) {
                $model->trafficSequences = [];
                $n1 = 0;
                foreach ($map['TrafficSequences'] as $item1) {
                    $model->trafficSequences[$n1] = trafficSequences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
