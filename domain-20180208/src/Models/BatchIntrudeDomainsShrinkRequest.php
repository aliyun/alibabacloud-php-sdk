<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class BatchIntrudeDomainsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $domainNamesShrink;
    protected $_name = [
        'domainNamesShrink' => 'DomainNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNamesShrink) {
            $res['DomainNames'] = $this->domainNamesShrink;
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
        if (isset($map['DomainNames'])) {
            $model->domainNamesShrink = $map['DomainNames'];
        }

        return $model;
    }
}
