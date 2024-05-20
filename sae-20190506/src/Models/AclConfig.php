<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class AclConfig extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var AclEntryConfig[]
     */
    public $aclEntries;
    protected $_name = [
        'aclEntries' => 'aclEntries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntries) {
            $res['aclEntries'] = [];
            if (null !== $this->aclEntries && \is_array($this->aclEntries)) {
                $n = 0;
                foreach ($this->aclEntries as $item) {
                    $res['aclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AclConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aclEntries'])) {
            if (!empty($map['aclEntries'])) {
                $model->aclEntries = [];
                $n                 = 0;
                foreach ($map['aclEntries'] as $item) {
                    $model->aclEntries[$n++] = null !== $item ? AclEntryConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
