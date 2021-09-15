<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\OperateAgentClientInstallResponseBody\aegisCelintInstallResposeList;
use AlibabaCloud\Tea\Model;

class OperateAgentClientInstallResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var aegisCelintInstallResposeList[]
     */
    public $aegisCelintInstallResposeList;
    protected $_name = [
        'requestId'                     => 'RequestId',
        'aegisCelintInstallResposeList' => 'AegisCelintInstallResposeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aegisCelintInstallResposeList) {
            $res['AegisCelintInstallResposeList'] = [];
            if (null !== $this->aegisCelintInstallResposeList && \is_array($this->aegisCelintInstallResposeList)) {
                $n = 0;
                foreach ($this->aegisCelintInstallResposeList as $item) {
                    $res['AegisCelintInstallResposeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateAgentClientInstallResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AegisCelintInstallResposeList'])) {
            if (!empty($map['AegisCelintInstallResposeList'])) {
                $model->aegisCelintInstallResposeList = [];
                $n                                    = 0;
                foreach ($map['AegisCelintInstallResposeList'] as $item) {
                    $model->aegisCelintInstallResposeList[$n++] = null !== $item ? aegisCelintInstallResposeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
