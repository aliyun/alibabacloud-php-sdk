<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallResponseBody\aegisCelintInstallResposeList;

class OperateAgentClientInstallResponseBody extends Model
{
    /**
     * @var aegisCelintInstallResposeList[]
     */
    public $aegisCelintInstallResposeList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aegisCelintInstallResposeList' => 'AegisCelintInstallResposeList',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aegisCelintInstallResposeList)) {
            Model::validateArray($this->aegisCelintInstallResposeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aegisCelintInstallResposeList) {
            if (\is_array($this->aegisCelintInstallResposeList)) {
                $res['AegisCelintInstallResposeList'] = [];
                $n1                                   = 0;
                foreach ($this->aegisCelintInstallResposeList as $item1) {
                    $res['AegisCelintInstallResposeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AegisCelintInstallResposeList'])) {
            if (!empty($map['AegisCelintInstallResposeList'])) {
                $model->aegisCelintInstallResposeList = [];
                $n1                                   = 0;
                foreach ($map['AegisCelintInstallResposeList'] as $item1) {
                    $model->aegisCelintInstallResposeList[$n1++] = aegisCelintInstallResposeList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
