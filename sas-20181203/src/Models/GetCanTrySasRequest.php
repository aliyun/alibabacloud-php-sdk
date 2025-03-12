<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetCanTrySasRequest extends Model
{
    /**
     * @description Specifies whether the request is redirected from the Elastic Compute Service (ECS) console. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $fromEcs;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'fromEcs' => 'FromEcs',
        'lang'    => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromEcs) {
            $res['FromEcs'] = $this->fromEcs;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCanTrySasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromEcs'])) {
            $model->fromEcs = $map['FromEcs'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
