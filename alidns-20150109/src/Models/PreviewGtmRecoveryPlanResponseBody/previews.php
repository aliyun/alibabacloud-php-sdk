<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponseBody\previews\preview;

class previews extends Model
{
    /**
     * @var preview[]
     */
    public $preview;
    protected $_name = [
        'preview' => 'Preview',
    ];

    public function validate()
    {
        if (\is_array($this->preview)) {
            Model::validateArray($this->preview);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preview) {
            if (\is_array($this->preview)) {
                $res['Preview'] = [];
                $n1 = 0;
                foreach ($this->preview as $item1) {
                    $res['Preview'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Preview'])) {
            if (!empty($map['Preview'])) {
                $model->preview = [];
                $n1 = 0;
                foreach ($map['Preview'] as $item1) {
                    $model->preview[$n1++] = preview::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
