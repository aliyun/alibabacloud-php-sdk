<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonCodeTemplateResponseBody\codes;

class GetAddonCodeTemplateResponseBody extends Model
{
    /**
     * @var codes[]
     */
    public $codes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codes' => 'codes',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->codes)) {
            Model::validateArray($this->codes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codes) {
            if (\is_array($this->codes)) {
                $res['codes'] = [];
                $n1 = 0;
                foreach ($this->codes as $item1) {
                    $res['codes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['codes'])) {
            if (!empty($map['codes'])) {
                $model->codes = [];
                $n1 = 0;
                foreach ($map['codes'] as $item1) {
                    $model->codes[$n1] = codes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
