<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class retry extends Model
{
    /**
     * @var int
     */
    public $attempts;

    /**
     * @var string[]
     */
    public $httpCodes;

    /**
     * @var string[]
     */
    public $retryOn;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'attempts' => 'Attempts',
        'httpCodes' => 'HttpCodes',
        'retryOn' => 'RetryOn',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->httpCodes)) {
            Model::validateArray($this->httpCodes);
        }
        if (\is_array($this->retryOn)) {
            Model::validateArray($this->retryOn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['Attempts'] = $this->attempts;
        }

        if (null !== $this->httpCodes) {
            if (\is_array($this->httpCodes)) {
                $res['HttpCodes'] = [];
                $n1 = 0;
                foreach ($this->httpCodes as $item1) {
                    $res['HttpCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retryOn) {
            if (\is_array($this->retryOn)) {
                $res['RetryOn'] = [];
                $n1 = 0;
                foreach ($this->retryOn as $item1) {
                    $res['RetryOn'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Attempts'])) {
            $model->attempts = $map['Attempts'];
        }

        if (isset($map['HttpCodes'])) {
            if (!empty($map['HttpCodes'])) {
                $model->httpCodes = [];
                $n1 = 0;
                foreach ($map['HttpCodes'] as $item1) {
                    $model->httpCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RetryOn'])) {
            if (!empty($map['RetryOn'])) {
                $model->retryOn = [];
                $n1 = 0;
                foreach ($map['RetryOn'] as $item1) {
                    $model->retryOn[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
