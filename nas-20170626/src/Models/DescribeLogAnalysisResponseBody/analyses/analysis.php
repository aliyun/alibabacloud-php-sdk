<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponseBody\analyses;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponseBody\analyses\analysis\metaValue;

class analysis extends Model
{
    /**
     * @var string
     */
    public $metaKey;

    /**
     * @var metaValue
     */
    public $metaValue;
    protected $_name = [
        'metaKey' => 'MetaKey',
        'metaValue' => 'MetaValue',
    ];

    public function validate()
    {
        if (null !== $this->metaValue) {
            $this->metaValue->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaKey) {
            $res['MetaKey'] = $this->metaKey;
        }

        if (null !== $this->metaValue) {
            $res['MetaValue'] = null !== $this->metaValue ? $this->metaValue->toArray($noStream) : $this->metaValue;
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
        if (isset($map['MetaKey'])) {
            $model->metaKey = $map['MetaKey'];
        }

        if (isset($map['MetaValue'])) {
            $model->metaValue = metaValue::fromMap($map['MetaValue']);
        }

        return $model;
    }
}
