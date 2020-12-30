<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\TransferInCheckMailTokenResponseBody;

use AlibabaCloud\Tea\Model;

class failList extends Model
{
    /**
     * @var string[]
     */
    public $failDomain;
    protected $_name = [
        'failDomain' => 'FailDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failDomain) {
            $res['FailDomain'] = $this->failDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailDomain'])) {
            if (!empty($map['FailDomain'])) {
                $model->failDomain = $map['FailDomain'];
            }
        }

        return $model;
    }
}
