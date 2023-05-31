<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetHoneypotProbeRequest extends Model
{
    /**
     * @description 设置请求和接收消息的语言类型，默认为**zh**。取值：
     *
     * - **zh**：中文
     * - **en**：英文
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the probe.
     *
     * @example d6c1ebc9-a90d-4c9e-9490-328814d1ca00
     *
     * @var string
     */
    public $probeId;
    protected $_name = [
        'lang'    => 'Lang',
        'probeId' => 'ProbeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHoneypotProbeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }

        return $model;
    }
}
