<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\result;

class data extends Model
{
    /**
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
        if (null !== $this->ext) {
            $this->ext->validate();
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->ext) {
            $res['Ext'] = null !== $this->ext ? $this->ext->toArray($noStream) : $this->ext;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1            = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['Ext'])) {
            $model->ext = ext::fromMap($map['Ext']);
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1            = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
