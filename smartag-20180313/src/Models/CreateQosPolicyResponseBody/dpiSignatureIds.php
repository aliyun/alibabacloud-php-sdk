<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\CreateQosPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class dpiSignatureIds extends Model
{
    /**
     * @var string[]
     */
    public $dpiSignatureId;
    protected $_name = [
        'dpiSignatureId' => 'DpiSignatureId',
    ];

    public function validate()
    {
        if (\is_array($this->dpiSignatureId)) {
            Model::validateArray($this->dpiSignatureId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dpiSignatureId) {
            if (\is_array($this->dpiSignatureId)) {
                $res['DpiSignatureId'] = [];
                $n1 = 0;
                foreach ($this->dpiSignatureId as $item1) {
                    $res['DpiSignatureId'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['DpiSignatureId'])) {
            if (!empty($map['DpiSignatureId'])) {
                $model->dpiSignatureId = [];
                $n1 = 0;
                foreach ($map['DpiSignatureId'] as $item1) {
                    $model->dpiSignatureId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
