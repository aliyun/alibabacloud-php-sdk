<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies;

use AlibabaCloud\Tea\Model;

class retry extends Model
{
    /**
     * @var int
     */
    public $attempts;

    /**
     * @example true/false
     *
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $httpCodes;

    /**
     * @var string[]
     */
    public $retryOn;
    protected $_name = [
        'attempts'  => 'Attempts',
        'enable'    => 'Enable',
        'httpCodes' => 'HttpCodes',
        'retryOn'   => 'RetryOn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['Attempts'] = $this->attempts;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->httpCodes) {
            $res['HttpCodes'] = $this->httpCodes;
        }
        if (null !== $this->retryOn) {
            $res['RetryOn'] = $this->retryOn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attempts'])) {
            $model->attempts = $map['Attempts'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['HttpCodes'])) {
            if (!empty($map['HttpCodes'])) {
                $model->httpCodes = $map['HttpCodes'];
            }
        }
        if (isset($map['RetryOn'])) {
            if (!empty($map['RetryOn'])) {
                $model->retryOn = $map['RetryOn'];
            }
        }

        return $model;
    }
}
