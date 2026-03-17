<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class DescribeClientUserDNSResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $appDNS;

    /**
     * @var string[]
     */
    public $recoveredDNS;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appDNS' => 'AppDNS',
        'recoveredDNS' => 'RecoveredDNS',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->appDNS)) {
            Model::validateArray($this->appDNS);
        }
        if (\is_array($this->recoveredDNS)) {
            Model::validateArray($this->recoveredDNS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appDNS) {
            if (\is_array($this->appDNS)) {
                $res['AppDNS'] = [];
                $n1 = 0;
                foreach ($this->appDNS as $item1) {
                    $res['AppDNS'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recoveredDNS) {
            if (\is_array($this->recoveredDNS)) {
                $res['RecoveredDNS'] = [];
                $n1 = 0;
                foreach ($this->recoveredDNS as $item1) {
                    $res['RecoveredDNS'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AppDNS'])) {
            if (!empty($map['AppDNS'])) {
                $model->appDNS = [];
                $n1 = 0;
                foreach ($map['AppDNS'] as $item1) {
                    $model->appDNS[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RecoveredDNS'])) {
            if (!empty($map['RecoveredDNS'])) {
                $model->recoveredDNS = [];
                $n1 = 0;
                foreach ($map['RecoveredDNS'] as $item1) {
                    $model->recoveredDNS[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
