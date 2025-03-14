<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetConsoleFuncGrayStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class excludeApiList extends Model
{
    /**
     * @description Action corresponding to the API.
     *
     * @example GetAttackTypeList
     *
     * @var string
     */
    public $action;

    /**
     * @description Product Code.
     *
     * @example Sas
     *
     * @var string
     */
    public $code;

    /**
     * @description API version.
     *
     * @example 2017-11-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'action' => 'Action',
        'code' => 'Code',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return excludeApiList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
