<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSmsSignsForAccountResponseBody;

use AlibabaCloud\Tea\Model;

class smsSigns extends Model
{
    /**
     * @var string
     */
    public $signName;
    protected $_name = [
        'signName' => 'SignName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsSigns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
