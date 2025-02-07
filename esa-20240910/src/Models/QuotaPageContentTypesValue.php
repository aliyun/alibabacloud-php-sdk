<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class QuotaPageContentTypesValue extends Model
{
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var WafQuotaInteger
     */
    public $contentLength;
    protected $_name = [
        'enable'        => 'Enable',
        'contentLength' => 'ContentLength',
    ];

    public function validate()
    {
        if (null !== $this->contentLength) {
            $this->contentLength->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->contentLength) {
            $res['ContentLength'] = null !== $this->contentLength ? $this->contentLength->toArray($noStream) : $this->contentLength;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['ContentLength'])) {
            $model->contentLength = WafQuotaInteger::fromMap($map['ContentLength']);
        }

        return $model;
    }
}
