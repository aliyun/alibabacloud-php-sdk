<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateGadInstanceMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $gadInstanceName;

    /**
     * @var string
     */
    public $createCount;
    protected $_name = [
        'gadInstanceName' => 'GadInstanceName',
        'createCount'     => 'CreateCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gadInstanceName) {
            $res['GadInstanceName'] = $this->gadInstanceName;
        }
        if (null !== $this->createCount) {
            $res['CreateCount'] = $this->createCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GadInstanceName'])) {
            $model->gadInstanceName = $map['GadInstanceName'];
        }
        if (isset($map['CreateCount'])) {
            $model->createCount = $map['CreateCount'];
        }

        return $model;
    }
}
