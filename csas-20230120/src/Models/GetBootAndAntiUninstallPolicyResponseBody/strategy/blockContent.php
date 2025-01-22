<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetBootAndAntiUninstallPolicyResponseBody\strategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetBootAndAntiUninstallPolicyResponseBody\strategy\blockContent\blockTextEn;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetBootAndAntiUninstallPolicyResponseBody\strategy\blockContent\blockTextZh;

class blockContent extends Model
{
    /**
     * @var blockTextEn
     */
    public $blockTextEn;
    /**
     * @var blockTextZh
     */
    public $blockTextZh;
    protected $_name = [
        'blockTextEn' => 'BlockTextEn',
        'blockTextZh' => 'BlockTextZh',
    ];

    public function validate()
    {
        if (null !== $this->blockTextEn) {
            $this->blockTextEn->validate();
        }
        if (null !== $this->blockTextZh) {
            $this->blockTextZh->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockTextEn) {
            $res['BlockTextEn'] = null !== $this->blockTextEn ? $this->blockTextEn->toArray($noStream) : $this->blockTextEn;
        }

        if (null !== $this->blockTextZh) {
            $res['BlockTextZh'] = null !== $this->blockTextZh ? $this->blockTextZh->toArray($noStream) : $this->blockTextZh;
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
        if (isset($map['BlockTextEn'])) {
            $model->blockTextEn = blockTextEn::fromMap($map['BlockTextEn']);
        }

        if (isset($map['BlockTextZh'])) {
            $model->blockTextZh = blockTextZh::fromMap($map['BlockTextZh']);
        }

        return $model;
    }
}
