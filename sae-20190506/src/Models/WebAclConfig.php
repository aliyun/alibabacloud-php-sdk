<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebAclConfig extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var WebAclEntryConfig[]
     */
    public $webAclEntries;
    protected $_name = [
        'webAclEntries' => 'WebAclEntries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webAclEntries) {
            $res['WebAclEntries'] = [];
            if (null !== $this->webAclEntries && \is_array($this->webAclEntries)) {
                $n = 0;
                foreach ($this->webAclEntries as $item) {
                    $res['WebAclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebAclConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebAclEntries'])) {
            if (!empty($map['WebAclEntries'])) {
                $model->webAclEntries = [];
                $n                    = 0;
                foreach ($map['WebAclEntries'] as $item) {
                    $model->webAclEntries[$n++] = null !== $item ? WebAclEntryConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
