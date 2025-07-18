<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyRequest;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyRequest\blockContent\blockTextEn;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyRequest\blockContent\blockTextZh;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockTextEn) {
            $res['BlockTextEn'] = null !== $this->blockTextEn ? $this->blockTextEn->toMap() : null;
        }
        if (null !== $this->blockTextZh) {
            $res['BlockTextZh'] = null !== $this->blockTextZh ? $this->blockTextZh->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockContent
     */
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
