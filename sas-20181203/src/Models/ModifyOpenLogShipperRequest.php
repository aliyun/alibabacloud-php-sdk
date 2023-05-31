<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyOpenLogShipperRequest extends Model
{
    /**
     * @description The ID of the request source. The default value is **aegis**. Valid values:
     * - **aegis**: Server Guard
     * - **sas**: Security Center
     *
     * > If you use Server Guard, set the value to **aegis**. If you use Security Center, set the value to **sas**.
     * @example sas
     *
     * @var string
     */
    public $from;
    protected $_name = [
        'from' => 'From',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOpenLogShipperRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        return $model;
    }
}
