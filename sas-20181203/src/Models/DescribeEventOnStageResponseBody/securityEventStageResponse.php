<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEventOnStageResponseBody;

use AlibabaCloud\Dara\Model;

class securityEventStageResponse extends Model
{
    /**
     * @var mixed[]
     */
    public $securityEventOnStag;
    protected $_name = [
        'securityEventOnStag' => 'SecurityEventOnStag',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventOnStag)) {
            Model::validateArray($this->securityEventOnStag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityEventOnStag) {
            if (\is_array($this->securityEventOnStag)) {
                $res['SecurityEventOnStag'] = [];
                foreach ($this->securityEventOnStag as $key1 => $value1) {
                    $res['SecurityEventOnStag'][$key1] = $value1;
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
        if (isset($map['SecurityEventOnStag'])) {
            if (!empty($map['SecurityEventOnStag'])) {
                $model->securityEventOnStag = [];
                foreach ($map['SecurityEventOnStag'] as $key1 => $value1) {
                    $model->securityEventOnStag[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
