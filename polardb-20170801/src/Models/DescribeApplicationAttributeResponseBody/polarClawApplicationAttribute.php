<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\polarClawApplicationAttribute\langfuseBinding;

class polarClawApplicationAttribute extends Model
{
    /**
     * @var langfuseBinding
     */
    public $langfuseBinding;
    protected $_name = [
        'langfuseBinding' => 'LangfuseBinding',
    ];

    public function validate()
    {
        if (null !== $this->langfuseBinding) {
            $this->langfuseBinding->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->langfuseBinding) {
            $res['LangfuseBinding'] = null !== $this->langfuseBinding ? $this->langfuseBinding->toArray($noStream) : $this->langfuseBinding;
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
        if (isset($map['LangfuseBinding'])) {
            $model->langfuseBinding = langfuseBinding::fromMap($map['LangfuseBinding']);
        }

        return $model;
    }
}
