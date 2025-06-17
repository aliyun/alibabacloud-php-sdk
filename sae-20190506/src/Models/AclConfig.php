<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class AclConfig extends Model
{
    /**
     * @var AclEntryConfig[]
     */
    public $aclEntries;
    protected $_name = [
        'aclEntries' => 'aclEntries',
    ];

    public function validate()
    {
        if (\is_array($this->aclEntries)) {
            Model::validateArray($this->aclEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclEntries) {
            if (\is_array($this->aclEntries)) {
                $res['aclEntries'] = [];
                $n1 = 0;
                foreach ($this->aclEntries as $item1) {
                    $res['aclEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['aclEntries'])) {
            if (!empty($map['aclEntries'])) {
                $model->aclEntries = [];
                $n1 = 0;
                foreach ($map['aclEntries'] as $item1) {
                    $model->aclEntries[$n1] = AclEntryConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
