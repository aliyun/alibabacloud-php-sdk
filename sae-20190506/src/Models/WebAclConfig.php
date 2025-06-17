<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebAclConfig extends Model
{
    /**
     * @var WebAclEntryConfig[]
     */
    public $webAclEntries;
    protected $_name = [
        'webAclEntries' => 'WebAclEntries',
    ];

    public function validate()
    {
        if (\is_array($this->webAclEntries)) {
            Model::validateArray($this->webAclEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webAclEntries) {
            if (\is_array($this->webAclEntries)) {
                $res['WebAclEntries'] = [];
                $n1 = 0;
                foreach ($this->webAclEntries as $item1) {
                    $res['WebAclEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['WebAclEntries'])) {
            if (!empty($map['WebAclEntries'])) {
                $model->webAclEntries = [];
                $n1 = 0;
                foreach ($map['WebAclEntries'] as $item1) {
                    $model->webAclEntries[$n1] = WebAclEntryConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
