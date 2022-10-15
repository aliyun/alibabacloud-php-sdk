<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SendMessageRequest;

use AlibabaCloud\Tea\Model;

class VAMLRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $vaml;
    protected $_name = [
        'code' => 'Code',
        'vaml' => 'Vaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->vaml) {
            $res['Vaml'] = $this->vaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VAMLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Vaml'])) {
            $model->vaml = $map['Vaml'];
        }

        return $model;
    }
}
