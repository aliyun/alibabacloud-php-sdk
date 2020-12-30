<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListUmengAppkeysResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $appkey;
    protected $_name = [
        'platform' => 'Platform',
        'name'     => 'Name',
        'appkey'   => 'Appkey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->appkey) {
            $res['Appkey'] = $this->appkey;
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
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Appkey'])) {
            $model->appkey = $map['Appkey'];
        }

        return $model;
    }
}
