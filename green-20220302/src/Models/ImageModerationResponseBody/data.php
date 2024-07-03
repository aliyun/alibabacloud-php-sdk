<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example fb5ffab1-993b-449f-b8d6-b97d5e3331f2
     *
     * @var string
     */
    public $dataId;

    /**
     * @var ext
     */
    public $ext;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'dataId'    => 'DataId',
        'ext'       => 'Ext',
        'result'    => 'Result',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->ext) {
            $res['Ext'] = null !== $this->ext ? $this->ext->toMap() : null;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Ext'])) {
            $model->ext = ext::fromMap($map['Ext']);
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
