<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSliderCaptchaPageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSliderCaptchaPageRequest\configs\en;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSliderCaptchaPageRequest\configs\zh;

class configs extends Model
{
    /**
     * @var en
     */
    public $en;

    /**
     * @var zh
     */
    public $zh;
    protected $_name = [
        'en' => 'En',
        'zh' => 'Zh',
    ];

    public function validate()
    {
        if (null !== $this->en) {
            $this->en->validate();
        }
        if (null !== $this->zh) {
            $this->zh->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->en) {
            $res['En'] = null !== $this->en ? $this->en->toArray($noStream) : $this->en;
        }

        if (null !== $this->zh) {
            $res['Zh'] = null !== $this->zh ? $this->zh->toArray($noStream) : $this->zh;
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
        if (isset($map['En'])) {
            $model->en = en::fromMap($map['En']);
        }

        if (isset($map['Zh'])) {
            $model->zh = zh::fromMap($map['Zh']);
        }

        return $model;
    }
}
