<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateLinkResponseBody;

use AlibabaCloud\Tea\Model;

class resultContent extends Model
{
    /**
     * @example https://xxx/xxx
     *
     * @var string
     */
    public $data;

    /**
     * @example https://xxx/xxx/xxx
     *
     * @var string
     */
    public $target;

    /**
     * @example 0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'data'    => 'Data',
        'target'  => 'Target',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
