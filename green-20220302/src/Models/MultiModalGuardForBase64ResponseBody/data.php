<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardForBase64ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardForBase64ResponseBody\data\detail;

class data extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'dataId' => 'DataId',
        'detail' => 'Detail',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                $n1 = 0;
                foreach ($this->detail as $item1) {
                    $res['Detail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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

        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n1 = 0;
                foreach ($map['Detail'] as $item1) {
                    $model->detail[$n1] = detail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
