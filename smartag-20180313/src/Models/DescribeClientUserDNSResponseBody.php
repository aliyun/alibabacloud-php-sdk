<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeClientUserDNSResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $appDNS;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $recoveredDNS;
    protected $_name = [
        'appDNS'       => 'AppDNS',
        'requestId'    => 'RequestId',
        'recoveredDNS' => 'RecoveredDNS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDNS) {
            $res['AppDNS'] = $this->appDNS;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recoveredDNS) {
            $res['RecoveredDNS'] = $this->recoveredDNS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClientUserDNSResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDNS'])) {
            if (!empty($map['AppDNS'])) {
                $model->appDNS = $map['AppDNS'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecoveredDNS'])) {
            if (!empty($map['RecoveredDNS'])) {
                $model->recoveredDNS = $map['RecoveredDNS'];
            }
        }

        return $model;
    }
}
